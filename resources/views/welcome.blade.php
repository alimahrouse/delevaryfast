

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="cCt8A2C9bVbOJK1pUrqZXtpymvfN2gTQVIunIuxm">

    <link rel="icon" href="public/storage/image/logo_fast.png" type="image/png" sizes="16x16" />

    <title>Fast Delivery Services</title>

    <!-- Styles -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="http://www.fastdeliverydc.com/resources/assets/css/app.css" rel="stylesheet">
    <link href="http://www.fastdeliverydc.com/resources/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://www.fastdeliverydc.com/resources/assets/css/carousel.css" rel="stylesheet">
    <link href="http://www.fastdeliverydc.com/resources/assets/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"cCt8A2C9bVbOJK1pUrqZXtpymvfN2gTQVIunIuxm"};
    </script>
</head>
<body>

    
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">
                        <img src="/storage/image/logo_trans.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                            <li><a href="">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Services <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Courier Services</a></li>
                                    <li><a href="">Air Freight</a></li>
                                    <li><a href="">Ocean Freight</a></li>

                                    <li><a href="">UPS</a></li>
                                    <li><a href="">Interisland Express</a></li>
                                    <li><a href="" target="_blank">Online Shopping Express</a></li>

                                    <li><a href="">P.O. Box Rental</a></li>
                                    <li><a href="">Moving Services</a></li>
                                    <li><a href="">Dry Ice</a></li>

                                    <li><a href="">Storage Rental</a></li>
                                    <li><a href="">Container Rental</a></li>
                                    <li><a href="">Port Services</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li>
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                  <li>  <a href="{{ url('/order') }}">my profile</a></li>
                                @else
                                  <li>  <a href="{{ route('login') }}">Login</a></li>
            
                                    @if (Route::has('register'))
                                       <li> <a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                            </li>                  
                    </ul>
                </div>
            </div>
            
        </nav>
        <div class="nav-gradient">
            &nbsp;
        </div>

          


<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="/storage/image/001.jpg" alt="First slide">
          <!-- <div class="container">
            <div class="carousel-caption">
              <h1>Online shopping</h1>
              <p>FAST EXPRESS - Order your items online and get them shipped to Aruba with ease!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div> -->
        </div>
        <div class="item">
          <img class="second-slide img-responsive" src="/storage/image/002.jpg" alt="Second slide">
          <!-- <div class="container">
            <div class="carousel-caption">
              <h1>Dry Ice</h1>
              <p>Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Call to action</a></p>
            </div>
          </div> -->
        </div>
        <div class="item">
          <img class="third-slide img-responsive" src="/storage/image/003.jpg" alt="Third slide">
          <!-- <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Call to action</a></p>
            </div>
          </div> -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- /.carousel -->

    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h2 style="font-size:55px;color:#7f7f7f;font-weight:normal;padding-bottom:10px;display:inline-block;margin:0 auto 50px">SERVICES</h2>
        </div>
      </div>


        <div class="row" style="margin:0 auto 40px">

            <a href="">
              <div class="col-md-4 welcome-service">
                  <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/courier.jpg" class="img-responsive">
                  <h2>Courier Services</h2>
              </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/airfreight.jpg" class="img-responsive">
                <h2>Air Freight</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/oceanfreight.jpg" class="img-responsive">
                <h2>Ocean Freight</h2>
            </div>
            </a>

        </div>

        <div class="row" style="margin:0 auto 40px">

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/ups.jpg" class="img-responsive">
                <h2>UPS</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/interisland.jpg" class="img-responsive">
                <h2>Interisland Express</h2>
            </div>
            </a>

            <a href="" target="_blank">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/online_shopping.jpg" class="img-responsive">
                <h2>Online Shopping</h2>
            </div>
            </a>

        </div>

        <div class="row" style="margin:0 auto 40px">

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/pobox.jpg" class="img-responsive">
                <h2>P.O. Box Rental</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/movingservices.jpg" class="img-responsive">
                <h2>Moving Services</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/dryice.jpg" class="img-responsive">
                <h2>Dry Ice</h2>
            </div>
            </a>

        </div>

        <div class="row" style="margin:0 auto 40px">

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/storage.jpg" class="img-responsive">
                <h2>Storage Rental</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/container_rental.jpg" class="img-responsive">
                <h2>Container Rental</h2>
            </div>
            </a>

            <a href="">
            <div class="col-md-4 welcome-service">
                <img src="http://www.fastdeliverydc.com/resources/assets/img//home/square/port_services.jpg" class="img-responsive">
                <h2>Port Services</h2>
            </div>
            </a>

        </div>

    </div>

    
        <div class="container-fluid bg-gradient">
            <div class="container" style="padding:20px 0">

                <div class="col-md-3 col-xs-12 col-sm-6 footer-left">
                    <h3 style="margin:0;padding:0;text-transform:uppercase;font-size:20px">Contact Us</h3>
                    <ul class="marginless" style="font-size:15px">
                        <li>Mansoura</li>
                        <li>Dakahlia, Egypt</li>
                        <li>Tel: 01069269976</li>
                        
                        <li>alimahros5555@gmail.com</li>
                    </ul>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-6 footer-right">
                    <h3>Opening hours</h3>
                    <ul class="marginless">
                        <li>Sunday - thursday: 8:00 - 18:00</li>
                        <li>Saturday: 8:00 - 13:00</li>
                        <li>Friday: Closed</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <img src="http://www.fastdeliverydc.com/resources/assets/img/wdlr.png" class="img-responsive footer-slogan">
                    </div>
                    <div class="row footer-fb">
                        <a href="" target="_blank" style="color:#fff"><img src="http://www.fastdeliverydc.com/resources/assets/img//facebook_button.png" class="img-responsive"></a>
                    </div>
                    
                </div>

                

                

            </div>
        </div>
        <div class="container-fluid footer-dsa">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12  mobile-center">
                        &copy; 2020 - FAST Delivery Services
                    </div>
                    <div class="col-md-6 col-xs-12 text-right mobile-center">
                        Powered by <a href="" target="_blank">Elharameen Group</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="http://www.fastdeliverydc.com/resources/assets/js/app.js"></script>
    <script src="http://www.fastdeliverydc.com/resources/assets/js/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-pbUA1khkLCADGYYvcFTyPYodMshYPq8&callback=initMap"></script>
</body>
</html>
