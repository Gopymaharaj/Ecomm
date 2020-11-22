@extends('home')
@section('home')

    <div class="container-fluid ">
        <div class="row custom-login">
            <div class="col-sm-4 offset-sm-4" id="loginform">
            <form action="login" method="post" id="containerform">
            @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary form-control m-auto d-block"> Login </button>
             </form>
             <div >
                <a class="btn btn-warning m-auto d-block" href="/register" style="color:#fff;">Register</a>
             </div>
             <br>
             <div >
                <a class="btn btn-success m-auto d-block" href="/forget">Forget Password</a>
             </div>
            </div>
            
        </div>
    </div>

@endsection