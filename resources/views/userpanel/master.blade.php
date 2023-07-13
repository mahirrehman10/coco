
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="main_body_content">

    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/index">
            The Truffle Expert
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse ">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/contactus">Inquiry</a>
                </li>
              </ul>
            </div>

            <div class="collapse navbar-collapse ">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/login">Login</a>
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
          <div class="col-md-10 col-lg-10">
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
              
                <a href="/index">
                Home
                </a>
              
                <a href="/login">
                  Chocolates
                </a>

                <a href="/contactus">
                 Inquiry
                </a>
                
              </div>
            </div>
          </div>
          
          
        
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->

  </div>

  

  <!-- jQery -->
  <script  src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script  src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script  src="js/custom.js"></script>
  
</body>

</html>
