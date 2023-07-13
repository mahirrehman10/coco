@extends('adminpanel.adminmaster')

@section('content')

 <div class="wrapper">

    

        
<div class="content-wrapper">
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Customer Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->


@if(Session('status'))
             <h3 style="color:Green">{{Session('status')}}</h3>
         @endif
         
<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<theads>
<tr>
      <th style="color:Black"><h5><b>Bill No.</b></h5></th>
        <th style="color:Black"><h5><b>Customer Name</h5></b></th>
        <th style="color:Black"><h5><b>Address</b></h5></th>
        <th style="color:Black"><h5><b>Mobile Number</b></h5></th>
        <th style="color:Black"><h5><b>Pin Code</b></h5></th>
        <th style="color:Black"><h5><b>Customer Email</b></h5></th>
        <th style="color:Black"><h5><b>Order Date</b></h5></th>
        <th style="color:Black"><h5><b>Product Detail</b></h5></th>
        <th style="color:Black"><h5><b>View Bill</b></h5></th>
        <th style="color:Black"><h5><b>Download Bill</b></h5></th>
      
      </tr>
    </thead>
    <tbody>

          @foreach($vieworder as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->custname}}</td>
        <td>{{$item->address1}}</td>
        <td>{{$item->mobileno}}</td>
        <td>{{$item->pincode}}</td>
        <td>{{$item->custemail}}</td>
        <td>{{$item->orderdate}}</td>
        <td><a href="{{url('viewcustomerorder/'.$item->id)}}" class="btn btn-primary">View Detail</td>
        <td><a href="{{url('viewcustomerbill/'.$item->id)}}" class="btn btn-warning">View Bill</td>
        <td><a href="{{url('invoice_pdf/'.$item->id)}}" class="btn btn-info" target="blank">Download Bill</td>
    
      </tr>
     @endforeach
    </tbody>
    </div>
  </table>
</div>


@endsection
