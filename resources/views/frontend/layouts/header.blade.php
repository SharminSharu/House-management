
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Root & Hawari  &mdash; House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('frontend/images/flat/icon.jpg') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
{{-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    
  </head>
  <body>

  
    
  
  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Root & Hawari <span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="{{url('/about')}}">About</a></li>
               
                  <li class="has-children">
                    <a href="{{url('/flatc')}}">Flats</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{url('/flatc')}}">Flats</a></li>
                      <li><a href="{{url('/review')}}">Tenants Reviews</a></li>
                   
                      {{-- <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li> --}}
                    </ul>
                  </li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                  <li><a href="{{route('login') }}">Login</a></li>
               
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/hero_bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Find your dream home</h1>
            <p class="mb-5">7/A Dhanmondi, Road-3,Dhaka-1209</p>
            <p><a href="{{url('/')}}" class="btn btn-primary px-5 py-3">Take a View</a></p>
          </div>
        </div>
      </div>
    </div>