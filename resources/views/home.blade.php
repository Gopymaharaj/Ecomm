<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecomm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <style>
        .custom-login{
            height:730px;
            background-image: url("{{asset('asset/img/background.png')}}");
            background-repeat: no-repeat;
            background-size: 100% auto;
            
        }
       
        .popular_product{
            float:left;
        }
        .detail{
            height:600px;   
        }
        #loginform{
            margin-top:170px;
            color:#fff;
            margin-bottom:150px;
        }
        #registerform{
            margin-top:110px;
            color:#fff;
            margin-bottom:150px;
        }
        input[type='email'],input[type='password'],input[type='text']
        {
            
            height:50px;
            margin-top:20px;
            margin-bottom:30px;
            border-bottom:1px solid #fff;
           
        }
    </style>
    </head>
    </body>
        {{ View::make('header')}}
        @yield('home')
        {{ View::make('footer')}}
    </body>
</html> 