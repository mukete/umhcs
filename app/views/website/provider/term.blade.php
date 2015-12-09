@extends('layouts.template')

@section('title')
  @parent Term Agreement 
@stop

@section('content')

<div class="hs_page_title">
  <div class="container">
    <h3>Provider Registration Form</h3>
    <!-- <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Provider</a></li>
    </ul> -->
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h4 class="hs_heading">Registration Steps</h4>
      <p>

      <ul class="nav nav-pills nav-stacked"> 
        <li role="presentation"><a href="#">Personal Information</a></li> 
        <li role="presentation"><a href="#">Contact Information</a></li> 
        <li role="presentation"><a href="#">Professional Credentials</a></li> 
        <li role="presentation"><a href="#">Education Information</a></li>
        <li role="presentation" class="follow-active"><a href="#">Term Agreement</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Term Agreement</h4>
      <p>
        <form action="{{URL::to('provider/term')}}" method="post" enctype="multipart/form-data">

          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label>Term &amp; Agreement</label>
                <textarea class="form-control input-sm" rows="20" >
                  This agreement was written in English (US). To the extent any translated version of this agreement conflicts with the English version, the English version controls.  Please note that Section 16 contains certain changes to the general terms for users outside the United States.
                  Date of Last Revision: January 30, 2015
                  Statement of Rights and Responsibilities
                  This Statement of Rights and Responsibilities ("Statement," "Terms," or "SRR") derives from the Facebook Principles, and is our terms of service that governs our relationship with users and others who interact with Facebook, as well as Facebook brands, products and services, which we call the “Facebook Services” or “Services”. By using or accessing the Facebook Services, you agree to this Statement, as updated from time to time in accordance with Section 13 below. Additionally, you will find resources at the end of this document that help you understand how Facebook works.
                  Because Facebook provides a wide range of Services, we may ask you to review and accept supplemental terms that apply to your interaction with a specific app, product, or service. To the extent those supplemental terms conflict with this SRR, the supplemental terms associated with the app, product, or service govern with respect to your use of such app, product or service to the extent of the conflict.
                </textarea>
              </div>

              <div class="form-group">

                <div class="checkbox" style="padding-left:20px;">
                  <label>
                    <input type="checkbox" value="1" name="term" required>
                    Agree to terms
                  </label>
                </div>
              </div>

            </div>

          </div>


          <button type="submit" class="btn btn-success">Next >></button>
        </form>
      </p>
    </div>
  </div>
  <div class="hs_margin_30"></div>
</div>

@stop