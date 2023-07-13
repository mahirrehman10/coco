@extends('customerpanel.customermaster')

@section('content')

<center><h3><b>My Order Details</b></h3><br></center>
<div class="">
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

          @foreach($myorder as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->custname}}</td>
        <td>{{$item->address1}}</td>
        <td>{{$item->mobileno}}</td>
        <td>{{$item->pincode}}</td>
        <td>{{$item->custemail}}</td>
        <td>{{$item->orderdate}}</td>
        <td><a href="{{url('viewmyorder/'.$item->id)}}" class="btn btn-primary">View Detail</td>
        <td><a href="{{url('viewbill/'.$item->id)}}" class="btn btn-warning">View Bill</td>
        <td><a href="{{url('invoice_pdf/'.$item->id)}}" class="btn btn-info" target="blank">Download Bill</td>
    
      </tr>
     @endforeach
    </tbody>
    </div>
  </table>
</div>


@endsection
