@extends('home')
@section('home')
<div class="container-fluid custom-product">
    <br>
    <h1 class="text-center" style="background:black; color:#fff;">Order Place</h1>
    <br>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
        <table class="table table-bordered">
            <tr>
                <th>Total Product</th>
                <td>{{$total1}}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>₹ {{$total}}</td>
            </tr>
            <tr>
                <th>Gst 18%</th>
                <td>₹ {{$data = $total*18/100}}</td>
            </tr>
            <tr>
                <th>Delivery Charges</th>
                <td>₹{{$charges = $total1*30}}</td>
            </tr>
            <tr>
                <th class="table-dark">Sub Total</th>
                <td class="table-dark">₹ {{$total+$data + $charges}}</td>
            </tr>
        </table>
        <form action="orderplace" method="post">
            @csrf
            <textarea required name="address" class="form-control" placeholder="Enter your address"></textarea>
            <br>
            <input type="radio" required name="payment" value="phonpe"><img src="{{asset('asset/img/phonpe.png')}}" style="height:50; margin-left:15px; "><br>
            <input type="radio" required name="payment" value="paytm"><img src="{{asset('asset/img/paytm.png')}}" style="height:30; margin-left:17px;"><br>
            <input type="radio" required name="payment" value="Googlepay"><img src="{{asset('asset/img/google.png')}}" style="height:50; margin-left:9px;"><br>
            <input type="radio" required name="payment" value="cash"><img src="{{asset('asset/img/cash.jpg')}}" style="height:50; margin-left:15px; margin-top:-5px;">
            <!-- <select name="payment" class="form-control">
                <option>Select Payment method</option>
                <option value="paytm">Paytm</option>
                <option value="cod">Cash on Delivery</option>
                <option value="Phonepe">Phonepe</option>
            </select> -->
            <br>
            <button type="submit" class="btn btn-success m-auto d-block" value="submit" name='submit'>Order place</button>
        </form>
        </div>
    </div>
    <br>
</div>
@endsection