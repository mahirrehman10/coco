@extends('customerpanel.customermaster')

@section('content')





 <h3><b>product Details</b></h3><br>
<div class="">

<table class="table table-hover table-striped">
<div class="content table-responsive table-full-width">
<thead>
<tr>
      <th style="color:Black"><h5><b>Bill No.</b></h5></th>
        <th style="color:Black"><h5><b>Product Name</h5></b></th>
        <th style="color:Black"><h5><b>Qty</b></h5></th>
        <th style="color:Black"><h5><b>Price</b></h5></th>
        <th style="color:Black"><h5><b>Gst</b></h5></th>
        <th style="color:Black"><h5><b>Total Price</b></h5></th>
        <th style="color:Black"><h5><b>Feedback</b></h5></th>
        <th style="color:Black"><h5><b>View Feedback</b></h5></th>
      </tr>
    </thead>
    <tbody>

    @php
            $count=0;
            $gst=0;
            $total=0;
            @endphp

            @foreach($viewmyorder1 as $item)
      <tr>
      <td>{{$item->billno}}</td>
      <td >
        @php
              $productid=DB::table('product_entry_models')->where('id',$item->productid)->get();

             $productName=DB::table('product_models')->where('id',$productid[0]->pnameid)->value('productname');
              @endphp
              {{$productName}}
              
        </td>

      
        <td style="color:Black">{{$item->qty}}</td>
        <td style="color:Black">{{$item->pprice}} ₹.</td>

        <!-- <th>@php
             $eval=$item->qty."*".$item->pprice;
             $p = eval('return '.$eval.';');
             $count=$count+$p;
             $gst=($count*5)/100;
             $total=$count + $gst;
             @endphp
             {{$p}}</th> -->

        <td>{{$gst}}</td>
        <td>{{$total}} ₹.</td>
        <th><a href="{{url('feedback/'.$item->id)}}" class="btn btn-success" >Feedback</a></th>
        <th><a href="{{url('viewfeedback/'.$item->id)}}" class="btn btn-info" >View Feedback</a></th>
        
        
       
      </tr>
      @endforeach
    </tbody>
    </div>
  </table>
</div>


   


    @endsection
