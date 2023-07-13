@extends('customerpanel.customermaster')

@section('content')



<style>
  
  
  body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}



  </style>

@if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif

<center>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-10 col-md-12">

                                                <div class="">
                                                    <div class="row m-l-0 m-r-0">
                                                    @foreach($profile as $item)
                                                        <div class="col-sm-12">
                                                            <div class="card-block">
                                                                <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Customer Profile</h3>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Full Name</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->fullname}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Username</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->username}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Gender</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->gender}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Address</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->address}}</h6>
                                                                    </div>
                                                                     <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">DOB</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->dob}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Mobile Number</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->mobilenumber}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400">{{$item->email}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <p class="m-b-10 f-w-600"></p>
                                                                        <a href="{{url('editprofile/'.$item->id)}}" class="btn btn-success" >Edit</a>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                   
                                                                    
                                                                </div>
                                                               
                                                            </div>
                                                           
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                            </center>




  @endsection

