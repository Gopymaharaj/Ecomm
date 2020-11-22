@extends('home')
@section('home')
<div class="container-fluid detail"><br><br>
    <div class="row">
        <div class="col-sm-4 offset-sm-1">
            <img src="{{asset('asset/img/' . $product->gallery) }}" width="100%" height="250">
        </div>
        <div class="col-sm-6 offset-sm-1">
        
            <div class="row">
                
                <div class="col-sm-4">
                <h2>Name :</h2>
                <h2>Price :</h2>
                <h4>Category :</h4>
                <h4>Description :</h4>
                </div>
                <div class="col-sm-8">
                <h2>{{$product['name']}}</h2>
                <h2>₹ {{$product['price']}}</h2>
                <h4>{{$product['category']}}</h4>
                <h4>{{$product['description']}}</h4>
                </div>
                
            </div>
            <form action="/add_to_cart" method="POST">
            @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success  mt-2" >Add to Cart</button>
            </form>
            <form action="/orderdirect" method="POST">
            @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success  mt-2" >Buy now</button>
            </form><br><br>
                <button class="btn btn-primary"><a href="/product" style="color:#fff; text-decoration:none;">Go back Home</a></button>
        </div>
    </div>
</div>
@endsection