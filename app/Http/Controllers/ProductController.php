<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Sesssion;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['data'=>$data]);
    }
    public function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function search(Request $req){
        $sch = $req->input('query');
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data,'sch'=>$sch]);
    }
    public function addtocart(Request $req){
        if($req->session()->has('user')){
            $userid =Session()->get('user')['id'];
            $qty = Cart::where('user_id',$userid)->where('product_id',$req->product_id)->first();
            if(isset($qty)){
                Cart::where('user_id',$userid)->where('product_id',$req->product_id)->update([
                    'qty'=>1
                ]);
                return redirect('/cartlist');
            }
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->qty=1;
            $cart->save();
            return redirect('/cartlist');
            
        }else{
            return redirect('/login');
        }
    }
    public function orderdirect(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/order');
        }else{
            return redirect('/login');
        }
    }
    
    static function cartdata(){
        $userid =Session()->get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }
    public function Cartlist(){
        $userid =Session()->get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userid)
        ->select('products.*','cart.id as cart_id','cart.qty')
        ->get();
        return view('cartlist',['product'=>$data]);
    }
    public function removeitem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function qty(Request $req){
        if($req->session()->has('user')){
        Cart::where('id',$req->id)->update([
            'qty'=>$req->qty
        ]);
            return redirect('cartlist');
        }
    }
    public function order(){
        $userid =Session()->get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');
        $data1 = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userid)
        ->count('products.price');
        return view('order',['total'=>$data,'total1'=>$data1]);
        
    }
    public function orderplace(Request $req){
        $userid =Session()->get('user')['id'];
        $cartitem = Cart::where('user_id',$userid)->get();
        foreach($cartitem as $cart){
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->order_number=rand();
            $order->address=$req->address;
            $order->qty=$cart['qty'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
        }
        Cart::where('user_id',$userid)->delete();
        return redirect('/product');
    }
    public function orderhistroy(){
        $userid =Session()->get('user')['id'];
        $data = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userid)
        ->select('products.*','orders.address','orders.status','orders.order_number','orders.payment_status','orders.payment_method','orders.id as order_id','orders.qty')
        ->get();

        return view('orderhistroy',['orders'=>$data]);
       
    }
    public function ordercancel(Request $req){
        Order::find($req->id)->delete();
        return redirect('/orderhistroy');
        
    }
}
