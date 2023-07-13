@extends('adminpanel.adminmaster')
@section('content')


<div class="content-wrapper">
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> Customer Message View</h3>
                        </div>
<div class="card">
@if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif
<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<theads>
<tr>
      <th style="color:Black"><h5><b>Id</b></h5></th>
        <th style="color:Black"><h5><b>Customer Name</h5></b></th>
        <th style="color:Black"><h5><b>Customer Email</b></h5></th>
        <th style="color:Black"><h5><b>Customer Mob</b></h5></th>
        <th style="color:Black"><h5><b>Product Name</b></h5></th>
        <th style="color:Black"><h5><b>Message</b></h5></th>
        
      
      </tr>
    </thead>
    <tbody>

          @foreach($cview as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->cname}}</td>
        <td>{{$item->cemail}}</td>
        <td>{{$item->mobilenumber1}}</td>
        <td>{{$item->productname1}}</td>
        <td>{{$item->message}}</td>
      </tr>    
        
     @endforeach
    </tbody>
    </div>
  </table>
</div>


@endsection