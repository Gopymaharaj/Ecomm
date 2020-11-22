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
@if(Session::has('user'))
    <div class="container-fluid ">
        <div class="row custom-login">
            <div class="col-sm-4 offset-sm-4" id="registerform">
            <form action="changepassword" method="POST" id="containerform">
            @csrf
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="New Password" required>
                </div>
                <button type="submit" class="btn btn-primary form-control m-auto d-block" >Update password</button>
             </form>
            </div>
        </div>
    </div>
@else
<div class="container-fluid ">
        <div class="row custom-login">
            <div class="col-sm-4 offset-sm-4" id="loginform"><br><br>
            <button class="btn btn-warning m-auto d-block" style="color:#fff; padding:20px; font-size:25px;">First you Login After change your password</button>
             <br>
             <button class="btn btn-warning m-auto d-block"><a href="/login" style="color:#fff; text-decoration:none;">login</a></button>
            </div>
        </div>
    </div>
@endif

@endsection