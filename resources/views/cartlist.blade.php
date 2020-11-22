@extends('home')
@section('home')
<div class="container-fluid custom-product">
    <br>
    <h1 class="text-center" style="background:black; color:#fff;">Cart List</h1>
    <br>
    @foreach($product as $item)
    <div class="row">
        <div class="col-sm-3"> 
            <a href="detail/{{$item->id}}" style="text-decoration:none;">
                <img src="{{asset('asset/img/' . $item->gallery) }}" width="100%" height="170">
            </a>
        </div>
        <div class="col-sm-3">
        <br>
              <h5 class="text-center" style="color:black; margin-top:15px;">{{$item->name}}</h5>
              <h5 class="text-center" style="color:black; margin-top:15px;">{{$item->description}}</h5>
        </div>
        <div class="col-sm-2">
        <br><br>
        <h5 class="text-center" style="color:black; margin-top:15px;">₹ {{$item->price}}</h5>
        </div>
        <div class="col-sm-2">
        <br>
        <form action="qty" method="post" class="mt-4">
        @csrf
        <span class="text-center ml-2" >Qty :</span>
        <input type="hidden" value="{{$item->cart_id}}" name="id">
        <input type="number" value="{{$item->qty}}" name="qty" style="width:38px; margin-left:10px; border:0px;"><br>
        <button class="btn btn-info btn-sm ml-2 mt-2" type="submit">Update</button>
        </form>
        
        </div>
        <div class="col-sm-1">
        <br><br><br>
            <a href="removeitem/{{$item->cart_id}}" style="color:#fff; text-decoration:none;" ><button class="btn btn-warning m-auto d-block">Remove</a></button>
        </div>
    </div>
    <hr>
    @endforeach
    <br>
    <div class="row">
     <a href="order" style="color:#fff; text-decoration:none; padding:10px;" ><button class="btn btn-success m-auto d-block">Order Now</a></button>
        <br>
    </div>
    <br><br>
</div>
@endsection
