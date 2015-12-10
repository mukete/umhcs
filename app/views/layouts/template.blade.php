<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="UMHCS" />
<meta name="description" content="UMHCS" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- favicon links -->
<link rel="shortcut icon" type="image/ico" href="{{URL::to('/')}}/favicon.ico" />
<link rel="icon" type="image/ico" href="{{URL::to('/')}}/favicon.ico" />
<!--Google web fonts-->
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!-- main css -->
<link rel="stylesheet" href="{{URL::to('/')}}/css/main.css" media="screen"/>
<link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-datetimepicker.min.css" media="screen"/>
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>

<!--page title-->
<title>UMHCS @section('title')@show</title>
</head>
<body> 
 
<!--header start-->
<header id="hs_header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        <div class="col-lg-2 col-md-2 col-sm-12">
          <div id="hs_logo" > <a href=""> <img src="{{URL::to('/')}}/images/logo.png" alt=""> </a> </div>
          <!-- #logo --> 
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <button type="button" class="hs_nav_toggle navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu<i class="fa fa-bars"></i></button>
          <nav>
            <ul class="hs_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <li><a href="">Home</a></li>
              <li><a href="">Features</a></li>
              <li><a href="">Self-Diagnostics</a></li>
              <li><a href="">Mdeical Tourism</a></li>
              <li><a href="">Store</a></li>
              <li><a href="">How It Works</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4">
          <div class="hs_social">
            <ul>
              @if(Auth::check())
                <li><a href="{{URL::to('/')}}">Account</a></li>
                <li><a href="{{URL::to('user/logout')}}">Logout</a></li>
              @else
                <li><a href="{{URL::to('user/login')}}">Login</a></li>
                <li><a href="{{URL::to('user/register')}}">Register</a></li>
              @endif
            </ul>
          </div>
          
          <!-- #logo --> 
        </div>
      </div>
      <!-- .col-md-12 --> 
    </div>
    <!-- .row --> 
  </div>
  <!-- .container --> 
  
</header>
<!--header end--> 


@yield('content')


<footer id="hs_footer">
  <div class="container">
    <div class="hs_footer_content">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="row">
            <div class="hs_footer_about_us">
              <div class="col-lg-3 col-md-4 col-sm-12 col-md-12 col-sm-12">
                <h4 class="hs_heading">About Us</h4>
                <a href="index-2.html"><img src="images/logo.png" alt="logo" width="180" height="41" /></a> </div>
              <div class="col-lg-9 col-md-8 col-sm-12 hs_about_us">
                <div class="hs_margin_60"></div>
                <p>Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate. </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12">
              <h4 class="hs_heading">Get in touch !</h4>
              <div class="hs_contact_detail">
                <p><i class="fa fa-map-marker"></i> 13/2 Elizabeth Street Melbourne VIC 3000, Australia</p>
                <p><i class="fa fa-mobile-phone"></i> +61 3 8376 6284</p>
                <div class="clearfix"></div>
                <div class="hs_social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
              <h4 class="hs_heading">Useful Links</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="services.html">Pediatric Clinic</a></li>
                  <li><a href="services.html">Dental Clinic</a></li>
                  <li><a href="services.html">General Surgery</a></li>
                  <li><a href="services.html">Physiotherapy</a></li>
                  <li><a href="services.html">Ltricies lputate</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="blog-categories.html">Blog Categories</a></li>
                  <li><a href="services-two-column.html">services Two Column</a></li>
                  <li><a href="blog-single-post.html">Blog Single Post</a></li>
                  <li><a href="services.html">services Three Column</a></li>
                  <li><a href="blog-single-post-leftsidebar.html">Blog Leftsidebar</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="blog-single-post-rightsidebar.html">Blog Rightsidebar</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="elements.html">Elements</a></li>
                  <li><a href="columns.html">columns</a></li>
                  <li><a href="icon.html">icon</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <h4 class="hs_heading">Twitter Widget</h4>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 hs_twitter_widget">
              <ul>
                <li> <i class="fa fa-twitter"></i> <a href="#">
                  <p>@healthcare...  Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus,  eleifend semper. <br>
                    <br>
                    <strong>17 hours ago</strong> </p>
                  </a> </li>
                <li> <i class="fa fa-twitter"></i> <a href="#">
                  <p>@Hsoftindia...  Suspende potenti. Etiam ullamcorper scelerisque bibendumonec cursus,  eleifend semper. <br>
                    <br>
                    <strong>2 min ago</strong> </p>
                  </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="hs_copyright"> Copyright © 2014 healthcare HTML Template All Rights Reserved </div>
<!--main js file start--> 
<script type="text/javascript" src="{{URL::to('/')}}/js/jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/bootstrap.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/owl.carousel.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/smoothscroll.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/single-0.1.0.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/custom.js"></script> 
<script type="text/javascript" src="{{URL::to('/')}}/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::to('/')}}/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

<script type="text/javascript">
  $('.form_datetime').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        format: 'yyyy-mm-dd hh:ii'
    });
</script>

<!--main js file end-->
</body>

</html>