@extends('master/layout')
@section('content')
<style>
    .header{
        background-image:linear-gradient(to right,#3204fdba,#9907facc), url({{asset('img/a3.jpg')}}) ;
        background-repeat: no-repeat;
        background-size: cover;
        position:center;
        margin:0;

        height:560px;
        width: 100%;
    }

.mid{
    background-color: #fafafa;
    height: 400px;
}
    .div4{
        background-image: url({{asset('img/a2.jpg')}}) ;
        background-repeat: no-repeat;
        background-size: cover;
        position:center;
        margin:0;

        height:auto;
        width:100%;
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
<div class="container container-md container-sm mt-5 mx-5 p-3">
<div class="row d-flex justify-content-center align-items-center mx-lg-5 mx-md-5">
<div class="col-lg-6 col-sm-">
<h5 style="border-bottom: 2px solid yellow;width: 20%">Best Food</h5>

    <h1>Welcome To Royal</h1>
    <p>
        We’ve been getting sick of using the same boring Latin text<br>
        so we’ve found some really cool Lorem Ipsum Text Generators.<br>
        I hope you can enjoy these as much as we do.<br>
         We’ve been getting sick of using the same boring Latin text<br>
        so we’ve found some really cool Lorem Ipsum Text Generators.<br>
        I hope you can enjoy these as much as we do.
    </p>
</div>
<div class="col-lg-6 ">
<img class="img-fluid mb-5 " style="height: 500px; width:80%" src="{{asset('img/a11.jpg')}}">
</div>
</div>
</div>
    <div class="mid container-md container-sm  d-flex justify-content-center align-items-center flex-column">
        <h6 class="text-md-center text-sm-center" style="border-bottom: 2px solid orange ">Easy your Food</h6>
        <h1 class="mb-3 text-sm-center text-md-center">Fresh Ingredient, Tastey Meals</h1>
        <p align="center">   We’ve been getting sick of using the same boring Latin text
            so we’ve<br> found some really cool Lorem Ipsum Text Generators.
            I hope<br> you can enjoy these as much as we do.</p>
        <button class="btn btn-primary px-4 py-2 ">View More</button>
    </div>
    <div class="div4">
<div class="container-lg container-sm container-md">
    <div class="row no-gutters">
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white border border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
              <h5 class="text-warning">$450</h5>
                <h3>Grill Fish</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-dark border text-white border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$40</h5>
                <h3>Mushroom matar</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white border border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$50</h5>
                <h3>Mushroom pyaza</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>

            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white border border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$40</h5>
                <h3>Hamburger</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-dark border text-white border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$20</h5>
                <h3>Salad</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$10 </h5>
                <h3>Pasta</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white border border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$100</h5>
                <h3>Rice.</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-dark border text-white border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$300</h5>
                <h3> Malai Kofta</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="bg-white border border-dark-50 justify-content-center d-flex align-items-center flex-column"
                 style="width:100%;height: 250px">
                <h5 class="text-warning">$450</h5>
                <h3>Chole</h3>
                <p align="center">   We’ve been getting sick of using the same boring Latin text
                    so we’ve.</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="justify-content-center mt-5   container-sm container-md align-items-center text-sm-center text-md-center">
        <h5 class="text-center">Feedback</h5>
        <h1 class="text-sm-center">What People are Saying</h1>
    </div>

@endsection
@section('title','Home')
@section('nava','active')

