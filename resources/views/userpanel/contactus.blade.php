@extends('userpanel.master')

@section('content')


  <!-- contact section -->

  <section class="contact_section layout_padding">
  <center>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-8 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Inquiry 
                </h2>
              </div>
              <form action="{{url('contacinsert')}}" method="POST">
                @csrf
                <div>
                  <input type="text" name="cname" placeholder="Full Name " />
                  <h6 style="color:red">@error('cname'){{$message}}@enderror</h6><br>

                </div>
                <div><br>
                  <input type="email" name="cemail"  placeholder="Email" />
                  <h6 style="color:red">@error('cemail'){{$message}}@enderror</h6><br>
                </div>
                <div>
                <div>
                  <input type="number"  name="mobilenumber1" placeholder="Phone number" />
                  <h6 style="color:red">@error('mobilenumber1'){{$message}}@enderror</h6><br>
                </div>
               <div> <select name="productname1" class="form-control" required>
                                                
                                                <option value="">--Select Name--</option>
                                                @foreach($pd as $row)
                                                <option value="{{$row->productname}}">{{$row->productname}}</option>
                                                @endforeach
                                                </select></div><br>
               
                  <input type="text"  name="message" class="message-box" placeholder="Message" />
                  <h6 style="color:red">@error('message'){{$message}}@enderror</h6><br>
                </div>
                <div class="d-flex ">

                  <button>
                    SEND NOW
                  </button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      </center>
    </section>


   @endsection
