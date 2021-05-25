@extends('master/layout')
@section('content')
<style>
    .header{
        background-image:linear-gradient(to right,#3204fdba,#9907facc), url({{asset('img/dish.png')}}) ;
        background-repeat: no-repeat;
        background-size: cover;
        position:center;
        margin:0;
        
        height:560px;
        width: 100%;
    }
    
    
</style>
<div class="header d-flex justify-content-center align-items-center text-white flex-column">

<h1 class="mb-3">Only Quality Food</h1>
<p align="center"> The emphasis of research and starting international research conferences were a sign<br>
    Our work is evident through our focus on plan IQ and EQ which makes us an<br>
    research and starting international research conferences were</p>
   <div class="mt-3">
   <button class="btn btn-outline btn-outline-danger mr-3 px-4 py-2">Place Order</button>
    <button class="btn btn-warning px-4 py-2 ">See More</button></div>
</div>
<div class="container mt-5 mx-5">
<div class="row">
<div class="col-sm-12 col-6">
<h5></h5>
</div>
<div class="col-sm-12 col-6">
<img class="img-fluid" src="{{asset('img/')}}">
</div>
</div>
</div>

@endsection
@section('title','Home')
@section('nava','active')

