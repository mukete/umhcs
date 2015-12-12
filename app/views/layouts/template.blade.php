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
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{URL::to('/')}}/css/main.css" media="screen"/>
<link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-datetimepicker.min.css" media="screen"/>


<!--page title-->
<title>UMHCS @section('title')@show</title>
</head>
<body> 
 
<!--header start-->
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Francais</a></li>
              </ul>
            </li>
            <li><a href="">Hospital Timings</a></li>
            <li><a href="">Appointments</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container first-head">
  <div class="row">
      <div class="col-md-4">
          <a href=""> <img src="{{URL::to('/')}}/images/logo_.png" alt="" width="125"> </a>
      </div>

      <div class="col-md-3">
        
      </div>

      <div class="col-md-3">
       
      </div>

      <div class="col-md-3">
        
      </div>
  </div>
</div>


<header id="hs_header">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        <div class="col-lg-10 col-md-10 col-sm-12">
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
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="hs_footer_about_us">
              <div class="col-lg-3 col-md-4 col-sm-12 col-md-12 col-sm-12">
                <h4 class="hs_heading">About Us</h4>
                <a href="index-2.html"><img src="images/logo_.png" alt="logo" width="100" /></a> </div>
              <div class="col-lg-9 col-md-8 col-sm-12 hs_about_us">
                <div class="hs_margin_60"></div>
                <p>Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate.Aenean facilisis sodales est neciMorbi vitapurus on Est facilisisro convallis commodo velante, tiam ltricies lputate. </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12">
              <h4 class="hs_heading">Get in touch !</h4>
              <div class="">
                <p><i class="fa fa-map-marker"></i> 9029 Liberty rd., #C, Randallstown, MD 21133, USA </p>
                <p>Phone : +1 (443) 272-6914</p>
                <p>Phone :  +1 (443) 272-6938</p>
                <p>Fax :  +1 (443) 405-3745</p>
                <p>Email :  info@umhcs.com</p>
                <p>Website : www.umhcs.com</p>
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
                  <li><a href="">Pediatric Clinic</a></li>
                  <li><a href="">Become a Member</a></li>
                  <li><a href="">Patient Benefits</a></li>
                  <li><a href="">Emergency Room</a></li>
                  <li><a href="">Informed Consent</a></li>
                  <li><a href="">HIPAA</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="">Become a Provider</a></li>
                  <li><a href="">Provider Benefits</a></li>
                  <li><a href="">Provider Profiles</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="">Terms of Use</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">User Agreement</a></li>
                  <li><a href="">Disclaimer</a></li>
                </ul>
              </div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Frequesntly Asked Questions</a></li>
                  <li><a href="">Contact Us</a></li>
                  <li><a href="">Investors</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="hs_copyright"> Copyright © 2015 UMHCS. All Rights Reserved </div>
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

<script type="text/javascript">
            $(document).ready(function() {

                $("[rel='tooltip']").tooltip();

                $('#hover-cap-4col .thumbnail').hover(

                function() {
                    $(this).find('.caption').slideDown(250);
                    $('.caption-btm').hide();
                },

                function() {
                    $(this).find('.caption').slideUp(250);
                    $('.caption-btm').show();
                });

                $('#hover-cap-3col .thumbnail').hover(

                function() {
                    $(this).find('.caption').fadeIn(250);
                },

                function() {
                    $(this).find('.caption').fadeOut(250);
                });

                $('#hover-cap-unique .thumbnail').hover(

                function() {
                    $(this).find('.caption').slideDown(500);
                },

                function() {
                    $(this).find('.caption').slideUp(500);
                });

                $('#hover-cap-6col .thumbnail').hover(

                function() {
                    $(this).find('.caption').show();
                },

                function() {
                    $(this).find('.caption').hide();
                });

            });
        </script>

<!--main js file end-->
</body>

</html>