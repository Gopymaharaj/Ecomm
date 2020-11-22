<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req){
        $data = User::where(['email'=>$req->email])->first();
        if($data && Hash::check($req->password,$data->password)){
            $req->session()->put('user',$data);
            return redirect('product');
        }else{
            return redirect('login');
        }
    }
    public function register(Request $req){
        //  User::insert([
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'password'=>Hash::make($req->password)
        // ]);
        

        if($req->hasFile('file')){
            $data = new User;
            $file = $req->file('file');
            $name = $file->getClientOriginalName();
            $file->storeAs('public',$name);
            $data->profile=$name;
            $data->name=$req->name;
            $data->email=$req->email;
            $data->password=Hash::make($req->password);
            $data->save();
        }else{
            return "not saved";
        }
        return redirect('/login');
    }
    public function forget(Request $req){
         User::where('email','=',$req->email)
         ->update([
             'password'=>Hash::make($req->password)
         ]);
         return redirect('/login');

        
    }
    public function changepassword(Request $req){
        $email =Session()->get('user')['email'];
        User::where('email',$email)->update([
            'password'=>Hash::make($req->password)
        ]);
        return redirect('/profile');
    }
}
