@extends('customerpanel.customermaster')

@section('content')

 <!-- chocolate section -->

 <section class="chocolate_section ">
      <div class="container">
        <div class="heading_container">
          <h2>
            Our chocolate products
          </h2>
          @if(Session('status'))
             <h3 style="color:green">{{Session('status')}}</h3>
         @endif
        </div>
      </div>
      <div class="container">
        <div class="chocolate_container">
        @foreach($product_entry as $item)
          <div class="box">
            <div class="img-box">
              <img src="{{asset('image_upload/'.$item->image)}}"/>
            </div>
            <div class="detail-box">
            <h7>Product Name: <span class="nolmal">{{$item->product_entry->productname}}</span></h7><br>
            <h7>Company: <span class="nolmal">{{$item->company}}</span></h7><br>
            <h7>₹<span class="nolmal">{{$item->price}}</span></h7><br>
              
              <a href="/viewdetail1/{{$item->id}}">
                <b> <i class="fa fa-eye" style="font-size:30px"></i>&nbsp<button class="button button1">VIEW PRODUCT</button></b>
              </a>
              <br>
              <a href="">
                <form action="/addtocart" method="post">
                  @csrf
                <input type="hidden" name="productid" value="{{$item->id}}">
                <input type="hidden" name="productqty" value="1">
                <input type="hidden" name="productcart" value="cart">
                <input type="hidden" name="billno" value="0">
                <input type="hidden" name="feedbacktitle" value="0">
                <input type="hidden" name="feedbackdesc" value="0">
                <input type="hidden" name="feedbackdate" value="0">
                <input type="hidden" name="feedbackimage" value="0">
                <input type="hidden" name="pprice" value="{{$item->price}}">

                
                <b><i class="fa fa-shopping-cart" style="font-size:30px">&nbsp</i><button class="button button2">ADD TO CART</button></b>
              </a>
              </form>
            </div>
          </div>
          @endforeach
          
          
         
          
        </div>
      </div>
    </section>

    <!-- end chocolate section -->

@endsection