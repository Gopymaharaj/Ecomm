<?php 
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user')){
  $total = ProductController::cartdata();

}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/product">Goyal Trading</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a style="color:#fff;" class="nav-link" href="/product">Home</a>
      </li>
      @if(Session::has('user'))
      <li class="nav-item">
        <a style="color:#fff;" class="nav-link" href="/orderhistroy">My Order</a>
      </li>
      
      <li class="nav-item">
        <a style="color:#fff;" class="nav-link" href="/wallet" tabindex="-1" aria-disabled="true">Wallet</a>
      </li>
      @endif
    </ul>
    <form class="form-inline mr-auto my-2 my-lg-0" action="/search" method="get">
      <input name="query" class="form-control search-box mr-sm-2" type="search" placeholder="Search" style="width:500px;">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mt-2 mt-lg-0">
    @if(Session::has('user'))
      <li class="nav-item active">
        <a class="nav-link mt-1" href="/cartlist"><span class="fa fa-cart-plus" style="font-size:23px;"></span> cart({{$total}})</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/profile"><img src="{{asset('storage/' . Session::get('user')['profile'])}}" height="40" widht="40" class="rounded-circle"></a>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle mt-1" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      
      @else
      <li class="nav-item">
        <a style="color:#fff;" class="nav-link" href="/login"><i class="fa fa-sign-in"></i> Login</a>
      </li>
      <li class="nav-item">
        <a style="color:#fff;" class="nav-link" href="/register"><i class="fa fa-user" aria-hidden="true"></i> Register</a>
      </li>
      @endif
    </ul>
  </div>
</nav>