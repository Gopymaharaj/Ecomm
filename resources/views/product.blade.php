@extends('home')
@section('home')
<div class="container-fluid custom-product">
    <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            @foreach($data as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
            <img src="{{asset('asset/img/' . $item->gallery) }}" width="100%" height="550">
            <div class="carousel-caption">
                <h3 style="color:black; ">{{$item['name']}}</h3>
                <p style="color:black;">{{$item['description']}}</p>
            </div> 
            </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </div>
    <br>
    <h1 class="text-center">Most Buy Product</h1>
    <br>
    <div class="row">
   
    @foreach($data as $item)
    <div class="col-sm-3 my-3"> 
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