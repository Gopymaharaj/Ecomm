@extends('home')
@section('home')
<style>

    .styleClass{
        border-radius:20px;
        border:0px;
        font-size:100px;
        margin:auto;
        display:block;
    }
   
</style>

@if(!Session::has('user'))
    <div class="container-fluid ">
        <div class="row custom-login">
            <div class="col-sm-4 offset-sm-4" id="registerform">
            <form action="register" method="post" id="containerform" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                        <button class="styleClass" onclick="document.getElementById('getFile').click()"><i class="fa fa-user" aria-hidden="true"></i></button>
                        <input type='file' name="file" id="getFile" style="display:none" required>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary form-control m-auto d-block" >Register</button>
             </form>
             <div >
                <a class="btn btn-warning m-auto d-block" href="/login" style="color:#fff;">Login</a>
             </div>
            </div>
            
        </div>
    </div>
@else
<div class="container-fluid ">
        <div class="row custom-login">
            <div class="col-sm-4 offset-sm-4" id="loginform"><br><br>
            <button class="btn btn-warning m-auto d-block" style="color:#fff; padding:20px; font-size:25px;">You Are already Login After logout you can register</button>
             <br>
             <button class="btn btn-warning m-auto d-block"><a href="/logout" style="color:#fff; text-decoration:none;">Logout</a></button>
            </div>
            
        </div>
    </div>
@endif

@endsection