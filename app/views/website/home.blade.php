@extends('layouts.template')

@section('title')
  @parent Home 
@stop

@section('content')

<!--slider start-->
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"> <img class="animated fadeInDown" src="{{URL::to('/')}}/images/slider/slider1.jpg" alt="...">
      <div class="carousel-caption">
        <h1 class="hs_slider_title animated bounceInDown">Meet Our Doctor’s Team.</h1>
        <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis rutrum in. 
          Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
        <a href="#hs_meat_doc" class="btn btn-default hs_slider_button animated fadeInLeftBig">More Info</a> <a href="#" class="btn btn-success animated fadeInRightBig">Download</a> </div>
    </div>
    <div class="item"> <img class="animated fadeInDown" src="{{URL::to('/')}}/images/slider/slider2.jpg" alt="...">
      <div class="carousel-caption">
        <h1 class="hs_slider_title animated bounceInDown">Book your Appointment</h1>
        <p class="lead animated pulse">Suspendisse eu sem tortor Etiam rhoncus viverra mi ac tempor turpis rutrum in. 
          Vivamus porttitor rhoncus tellus, id ultricies eros gravida ut.</p>
        <a href="#hs_appointment_form_link" class="btn btn-default hs_slider_button animated fadeInLeftBig">More Info</a> <a href="#" class="btn btn-success animated fadeInRightBig">Download</a> </div>
    </div>
  </div>
</div>
<!--layer slider ends--> 

<!--slider end-->

<div class="container"> 
  <!--service start-->
  <div class="row text-center">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="hs_service">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <h4>Patients</h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p></p>
            <a href="" class="btn btn-default">Register</a> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="hs_service">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <h4>Private Practice</h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4" style="text-align:center;">
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p> </p>
            <a href="" class="btn btn-default">Register</a> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="hs_service">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <h4>Institutions</h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4" style="text-align:center;">
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p></p>
            <a href="" class="btn btn-default">Register</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--service end-->
  
  <div class="row"> 
    <!--what we do start-->
    <h3 class="hs_heading">Benefits</h3>
    <div class="col-lg-6 col-md-7 col-sm-12">
      
      <div class="hs_tab">
        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#services1" data-toggle="tab">Patients</a></li>
          <li><a href="#services2" data-toggle="tab">Patients</a></li>
          <li><a href="#services3" data-toggle="tab">Physicians</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in active" id="services1">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-4 col-md-4 col-sm-4"> <img src="{{URL::to('/')}}/images/service/1.jpg" alt="" /> </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <h4 class="hs_theme_color">Benefits for patients.</h4>
                  <p>
                    Online diagnostic and customized treatment plan<br/>
                    Prescription refills management<br/>
                    Timely appointment with appropriate specialists<br/>
                    Transportation arrangement<br/>
                    Weight loss counselling and guidance<br/>
                    Fertility treatment counselling and guidance<br/>
                    Cosmetic surgery counselling and guidance<br/>
                    Long-term care management<br/>
                    Mental health management
                  </p>
                  <div class="hs_margin_30"></div>
                  <!-- <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a> -->
                   </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="services2">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <h4 class="hs_theme_color">Benefits for patients.</h4>
                  <p>
                    Free online consultation with no copay<br/>
                    24/7 direct access to US Board of Physicians<br/>
                    Unlimited live video, phone, and chat consultation<br/>
                    Remote monitoring, text alert, and scheduled calls<br/>
                    Priority answer to health and well-being questions<br/>
                    Continuing medical information and education<br/>
                    Patient e-health portal with consolidate medical record and history<br/>
                    24/7 direct access to Worldwide physicians and specialists
                  </p>
                  <div class="hs_margin_30"></div>
                  <!-- <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a>  -->
                  </div>
                <div class="col-lg-4 col-md-4 col-sm-4"> <img src="{{URL::to('/')}}/images/service/1.jpg" alt="" /> </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="services3">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12"> <img width="515" height="252" src="{{URL::to('/')}}/images/service/2.jpg" alt="" />
                <h4 class="hs_theme_color">Benefits for physicians.</h4>
                <p>
                  No misaligned incentives<br/>
                  No provider network constraint<br/>
                  Hassle-free medical billing and coding<br/>
                  No stress in collecting account receivables<br/>
                  Lower liability risk (seeing only 500 patients compared to 2000)<br/>
                  No third-party control (insurances and pharmaceutical companies)<br/>
                  No more responsibilities or stress related to managing a practice<br/>
                  No more overhead (latest research shows that the overhead/revenue ratio is approaching 70%)
                </p>
                <!-- <a href="blog-single-post-rightsidebar.html" class="btn btn-default">Read More</a>  -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--what we do end--> 
    <!--Book an Appointment start-->
    <div class="col-lg-6 col-md-5 col-sm-12">
      <div class="hs_appointment_form_div"> <img src="{{URL::to('/')}}/images/bg/appointment_form.jpg" width="512" height="365" alt=""/>
        <div class="hs_appointment_form">
          <form method="post">
            <div class="row">
              <div class="col-lg-6 col-md-7 col-sm-6">
                <div class="form-group">
                  <select class="form-control" id="slider_select_dep" name="select_dep">
                    <option>Select Department</option>
                    <option value="Department 1">Department 1</option>
                    <option value="Department 2">Department 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="slider_fname" name="fname" placeholder="full Name  ( required )" required>
                </div>
                <div class="form-group">
                  <input type="text" id="slider_phone" name="phone" class="form-control"  placeholder="Phone (required)" required>
                </div>
                <div class="form-group">
                  <input type="email" id="slider_email" name="email" class="form-control"  placeholder="Email (required)" required>
                </div>
                <div class="form-group">
                  <input type="date" id="slider_date" name="date" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-3">
                <button type="button" id="slider_book_apo" class="btn btn-default">Submit</button>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <p>Aenean facilisis sodales est nec gravida. Morbi vitae purus non est facilisis.</p>
              </div>
            </div>
            <p id="appointment_err"></p>
          </form>
        </div>
      </div>
    </div>
    <!--Book an Appointment end--> 
  </div>


  <div class="row"> 
    <!--what we do start-->
    <h3 class="hs_heading">Store</h3>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="row"> 
        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul> 

        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>

        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>

        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>

        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>

        <ul class="thumbnails col-md-4" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
      </div>
    </div>
    <!--what we do end--> 
    <!--Book an Appointment start-->
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="row"> 
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul>
        <ul class="thumbnails col-md-6" id="hover-cap-4col" style="list-style:none;">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Store Item</h4>

                        <p>
                          blaah blah.....some content here
                          <a href="" class="btn btn-xs btn-info">Read more</a> <br/><br/>
                          <a href="" class="btn btn-xs btn-success">Add to cart</a>
                        </p>
                    </div>
                    <img src="http://placehold.it/250x250" alt="">
                </div>
            </li>
        </ul> 
      </div>
    </div>
    <!--Book an Appointment end--> 
  </div>
  
  <div class="row"> 
    <!--what we do start-->
    <h3 class="hs_heading">Events</h3>
    <div class="col-lg-8 col-md-8 col-sm-12">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    </div>
  </div>

  <!--Up Coming Events end-->
  <div class="hs_margin_40"></div>
  
  <!--Our Doctor Team start-->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="hs_heading" id="hs_meat_doc">Our Doctor Team</h3>
      <div class="our_doctor_team">
        <div id="our_doctor_team_slider" class="owl-carousel owl-theme">
          <div class="our_doctor_team_slider_item"> <img src="{{URL::to('/')}}/images/team/team_member1.png" alt="" />
            <div class="hs_team_member_detail">
              <h3>Dr Johnathan Treat</h3>
              <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
              <a href="profile-single.html" class="btn btn-default">Read More</a> </div>
          </div>
          <div class="our_doctor_team_slider_item"> <img src="{{URL::to('/')}}/images/team/team_member2.png" alt="" />
            <div class="hs_team_member_detail">
              <h3>Dr. Edwin Spindrift</h3>
              <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
              <a href="profile-single.html" class="btn btn-default">Read More</a> </div>
          </div>
          <div class="our_doctor_team_slider_item"> <img src="{{URL::to('/')}}/images/team/team_member3.png" alt="" />
            <div class="hs_team_member_detail">
              <h3>Dr Johnathan Treat</h3>
              <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
              <a href="profile-single.html" class="btn btn-default">Read More</a> </div>
          </div>
          <div class="our_doctor_team_slider_item"> <img src="{{URL::to('/')}}/images/team/team_member1.png" alt="" />
            <div class="hs_team_member_detail">
              <h3>Dr. Edwin Spindrift</h3>
              <p>Quisque vitae interdum ipsum. Nulla eget mpernulla. Proin lacinia urna </p>
              <a href="profile-single.html" class="btn btn-default">Read More</a> </div>
          </div>
        </div>
        <div class="customNavigation text-right"> <a class="btn_prev prev"><i class="fa fa-chevron-left"></i></a> <a class="btn_next next"><i class="fa fa-chevron-right"></i></a> </div>
      </div>
    </div>
  </div>
  <!--Our Doctor Team end-->
  <div class="clearfix"></div>
  
  <!--Meet Our Partners start-->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="hs_heading">Meet Our Partners</h3>
      <div class="our_partners">
        <div id="our_partners_slider" class="owl-carousel owl-theme">
          <div class="our_partners_slider_item"> <img src="{{URL::to('/')}}/images/partner/partner1.png" alt="" width="142" height="40"  /> </div>
          <div class="our_partners_slider_item"> <img src="{{URL::to('/')}}/images/partner/partner2.png" alt="" width="142" height="40"  /> </div>
          <div class="our_partners_slider_item"> <img src="{{URL::to('/')}}/images/partner/partner3.png" alt="" width="142" height="40"  /> </div>
          <div class="our_partners_slider_item"> <img src="{{URL::to('/')}}/images/partner/partner4.png" alt="" width="142" height="40"  /> </div>
          <div class="our_partners_slider_item"> <img src="{{URL::to('/')}}/images/partner/partner1.png" alt="" width="142" height="40"  /> </div>
        </div>
        <div class="customNavigation text-right"> <a class="btn_prev prev"><i class="fa fa-chevron-left"></i></a> <a class="btn_next next"><i class="fa fa-chevron-right"></i></a> </div>
      </div>
    </div>
  </div>
  <!--Meet Our Partners end-->
  <div class="hs_margin_60"></div>
</div>

@stop