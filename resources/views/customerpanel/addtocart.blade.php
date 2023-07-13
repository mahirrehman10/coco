@extends('customerpanel.customermaster')

@section('content')

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

 button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
} 

 .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
} 

 img.avatar {
  width: 40%;
  border-radius: 50%;
} 

 .container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
} 

/* Change styles for span and cancel button on extra small screens */
 @media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
} 
</style>
<center><h3 style="color:red">{{session('status')}}</h3></center>
<body>
<center><h3><b> Add To Cart</b></h3><br></center>
<div class="">
<center>
<table class="table table-hover table-striped">
<div class="">
<theads>
<tr>   
        <th style="color:Black"><h5><b>Product Id</b></h5></th>
        <th style="color:Black"><h5><b>Product Name</h5></b></th>
        <th style="color:Black"><h5><b>Product Quantity</b></h5></th>
        <th style="color:Black"><h5><b>Price</b></h5></th>



     <th style="color:Black"><h5><b>Sub Total</b></h5></th>
        <th style="color:Black"><h5><b>Action</b></h5></th>
        <th style="color:Black"><h5><b>Delete</b></h5></th>
     
      </tr>
    </thead>
    <tbody>
       

        @php
            $count=0;
            $gst=0;
            $total=0;
            @endphp

          @foreach($cust as $item)
      <tr>
      <td style="color:Black">{{$item->id}}</td>

        <td >
        @php
              $productid=DB::table('product_entry_models')->where('id',$item->productid)->value('pnameid');
              $productName=DB::table('product_models')->where('id',$productid)->value('productname');
              @endphp
              {{$productName}}
        </td>

        


        <td style="color:Black">{{$item->qty}}</td>
        <td style="color:Black">{{$item->pprice}}</td>
              <th>@php
                $eval=$item->qty."*".$item->pprice;
                $p = eval('return '.$eval.';');
                $count=$count+$p;
                $gst=($count*8)/100;
                $total=$count+$gst;
                @endphp
                {{$p}}</th>

                <td><a href="{{url('cartedit/'.$item->id)}}" class="btn btn-success">Edit Qty</td>
             <td><a href="{{url('cartdelete/'.$item->id)}}" class="btn btn-danger">Delete</td>

        
      </tr>
     @endforeach
    </tbody>

    <tr>
            <td><a href="/viewproduct" class="btn btn-danger">Continue Shopping</a></td>
            <td colspan="2"></td>
            <th>Total Amount<br>GST(8%)</th>

            <th>{{$count}} Rs.<br>{{$gst}} Rs</th>
        </tr>
        <tr>
             <td colspan="3"></td>
            <th>Final Amount</th>
            
            <th>{{$total}}Rs</th>
        </tr>
    </div>
  </table>

</center>



<form action="{{url('checkoutinsertdata')}}" method="post">
  @csrf
<center> <h2>Customer Details</h2> </center>
  

  <div class="container">

  <label for="psw"><b>Orderdate</b></label>
    <input type="text" value="{{now()->format('d-m-y')}}" name="orderdate" required>

    <label for="uname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="custname" required>

    <label for="psw"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address1" required>

    <label for="psw"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="mobileno" required>

    <label for="psw"><b>Email Id :</b></label>
    <input type="text" placeholder="Enter Email" name="custemail" required>


    <label for="psw"><b>Select Pincode :</b></label>
    <select name="pincode" class="form-control">
          <option>---Select Pincode---</option>
              @foreach($data2 as $row)
              <option value="{{$row->pincode}}">{{$row->pincode}}</option>
              @endforeach
</select><br><br>

    <label for="psw"><b>Select Payment Method :</b></label>
    <select name="shippingtype" class="form-control">
              <option>Cash On Delivery</option>
</select><br>
    <input type="hidden" placeholder="Enter Number" value="0" name="billno" required>
    <input type="hidden" placeholder="Enter Number" value="{{$gst}}" name="gst" required>
    <input type="hidden" placeholder="Enter Number" value="{{$total}}" name="total" required>

    <button type="submit">Check Out</button>
    
  </div>

  
</form>

</div>
</body>



@endsection