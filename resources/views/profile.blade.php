@extends('home')
@section('home')
<style>
    
    .custom-profile{
            height:auto;
            background-image: url("{{asset('asset/img/background.png')}}");
            background-repeat: no-repeat;
            background-size: 100% auto;
            height:650px;
    }
    #profile{
        margin-top:100px;
        color:#fff;
    }
    #chng{
        color:orange;
        
    }
</style>

    <div class="container-fluid custom-profile" >
        <div class="row">
            <div class="col-sm-4 offset-sm-4" id="profile">
            <br>
                <div>
                <img src="{{asset('storage/' . Session::get('user')['profile'])}}" height="200" widht="200" class="rounded-circle m-auto d-block">
                </div>
                <br>
                <div>
                    <h2 class="text-center">{{Session::get('user')['name']}}</h2>
                </div>
                <br>
                <div>
                    <h2 class="text-center">{{Session::get('user')['email']}}</h2>
                </div>
                <br>
                <div>
                    <h4 class="text-center"><a href="/changepassword" id="chng">Change Password</a></h4>
                <br>
                </div>
                <div >
                    <a class="btn btn-success m-auto d-block" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>


@endsection