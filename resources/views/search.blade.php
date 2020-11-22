@extends('home')
@section('home')
<div class="container-fluid custom-product">
    <br>
    <h1 class="text-center" style="background:black; color:#fff;">Search {{$sch}}</h1>
    <br>
    <div class="row">
   
    @foreach($product as $item)
    <div class="col-sm-3"> 
    <a href="detail/{{$item['id']}}" style="text-decoration:none;">
         <img src="{{asset('asset/img/' . $item->gallery) }}" width="100%" height="170"> 
         <h5 class="text-center" style="color:black; margin-top:15px;">{{$item['name']}}</h5>
         <br>
         <button class="btn btn-info m-auto d-block">Buy Now</button>
    </a>
    </div>
    @endforeach
    </div>
    <br>
</div>
@endsection