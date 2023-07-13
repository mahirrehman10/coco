<?php

      use App\Http\Controllers\CustomerPanelController;
      $total=CustomerPanelController::cartitem();
?>
<!DOCTYPE html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>The Truffle Expert</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" />
  <!-- font awesome style -->
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

</head>

<body>

  <div class="main_body_content">

    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/customerindex">
              The Truffle Expert
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/customerindex">Home</a>
                </li>
                
              </ul>
          
            </div>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/profile">Profile</a>
                </li>
                
              </ul>
          
            </div>

            
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/viewproduct">Product</a>
                </li>
                
              </ul>
          
            </div>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/myorder">My Order</a>
                </li>
                
              </ul>
          
            </div>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/addtocart"><i class="fa fa-shopping-cart" style="font-size:30px;color:brown"></i> &nbsp{{$total}}</a>
                </li>
                
              </ul>
          
            </div>

           

            <div class="collapse navbar-collapse ">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="customer_logout" href="/login">Logout</a><br>
                  <strong>Welcome - {{Session::get('CustomerLogginId')['fullname']}}</strong>
                </li>
                
              </ul>
          
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      
      <!-- slider section -->
      <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        Chocolate <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                     
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        Chocolate <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                     
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        Chocolate <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                      
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- end slider section -->
    </div>
 
      <!-- chocolate section -->

   @yield('content')
    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section layout_padding center">
      <div class="container">
        <div class="row info_form_social_row">
          <div class="col-md-10 col-lg-10 mx-auto">
            <div class="info_form">
              
            </div>
          </div>
          <div class="col-md-4 col-lg-3">

            
          </div>
        </div>
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-4">
            <div class="info_links">
              <h4>
                Menu
              </h4>
              <div class="info_links_menu">
              
                <a href="/customerindex">
                  Home
                </a>
                
                <a href="/viewproduct">
                  Chocolates
                </a>
                
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="info_detail">
             
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <h4>
              Contact Us
            </h4>
            <div class="info_contact">
             
              
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +917698155066
                </span>
              </a>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->

  </div>
  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="col-md-11 col-lg-8 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/"></a>The Truffle Expert
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  

  <!-- jQery -->
  <script  src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script  src="{{ asset('/bootstrap.js')}}"></script>
  <!-- slick slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script  src="{{ asset('js/custom.js')}}"></script>
  
</body>

</html>
