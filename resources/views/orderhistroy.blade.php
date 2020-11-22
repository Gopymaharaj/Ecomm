@extends('home')
@section('home')
<div class="container-fluid custom-product">
    <br>
    <h1 class="text-center" style="background:black; color:#fff;">Your order List</h1>
    <br>
   
    @foreach($orders as $item)
    <div class="row">
        <h2 class="m-auto d-block bg-warning px-5"> Order Number : <span style="color:#fff; margin-top:15px;"> {{$item->order_number}}</span></h2>
    </div>
    <div class="row">
        <div class="col-sm-3"> 
            <a href="detail/{{$item->id}}" style="text-decoration:none;">
                <img src="{{asset('asset/img/' . $item->gallery) }}" width="100%" height="170">
            </a>
        </div>
        <div class="col-sm-3 ">
              <h5 class="text-center" style="color:black; margin-top:15px;">{{$item->name}}</h5>
              <h5 class="text-center" style="color:black; margin-top:15px;">Delivery Status : <span style="color:orange;">{{$item->status}}</span></h5>
              <h5 class="text-center" style="color:black; margin-top:15px;">Payment Method : <span style="color:orange;">{{$item->payment_method}}</span></h5>
              <h5 class="text-center" style="color:black; margin-top:15px;">Payment Status : <span style="color:orange;">{{$item->payment_status}}</span></h5>
              <h5 class="text-center" style="color:black; margin-top:15px;">Qty : <span style="color:orange;">{{$item->qty}}</span></h5>
        </div>
        <div class="col-sm-2">
        <h3 class="text-center" style="color:black; margin-top:15px;">Price</h3>
        <h6 class="text-center" style="color:orange; margin-top:15px;">₹ {{$total = $item->price}}(Total)</h6>
        <h6 class="text-center" style="color:orange; margin-top:15px;">₹ {{$gst = $item->price*18/100}}(GST)</h6>
        <h6 class="text-center" style="color:orange; margin-top:15px;">₹ {{$delivery = $item->price*0.5/100}}(Delivery)</h6>
        <h6 class="text-center" style="color:orange; margin-top:15px;">₹ {{$total+$gst+$delivery}}(SubTotal)</h6>
        </div>
        <div class="col-sm-2">
            <h3 class="text-center" style="color:black; margin-top:15px;">Address</h3>
            <h6 class="text-center" style="color:orange; margin-top:15px;">{{Session::get('user')['name']}}</h6>
             <h6 class="text-center" style="color:orange; margin-top:15px;">{{$item->address}}</h6> 
        </div>
        <div class="col-sm-2">
        <br><br>
            <a href="ordercancel/{{$item->order_id}}" style="color:#fff; text-decoration:none;" ><button class="btn btn-warning m-auto d-block">Cancel Order</a></button>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection
