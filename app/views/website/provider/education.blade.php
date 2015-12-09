@extends('layouts.template')

@section('title')
  @parent Education Information 
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
        <li role="presentation" class="follow-active"><a href="#">Education Information</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Term Agreement</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Education Information</h4>
      <p>
        <form action="{{URL::to('provider/education')}}" method="post" enctype="multipart/form-data">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Name*</label>
                <input type="text" class="form-control input-sm" name="current_employer_name" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Email*</label>
                <input type="email" class="form-control input-sm" name="current_employer_email" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Phone*</label>
                <input type="tel" class="form-control input-sm" name="current_employer_phone" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Address*</label>
                <input type="text" class="form-control input-sm" name="current_employer_address" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Fax*</label>
                <input type="text" class="form-control input-sm" name="current_employer_fax" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Website*</label>
                <input type="email" class="form-control input-sm" name="current_employer_website" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Contact Phone*</label>
                <input type="text" class="form-control input-sm" name="current_employer_contact_phone" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Contact Email*</label>
                <input type="email" class="form-control input-sm" name="current_employer_contact_email" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Passport Photo*</label>
                <input type="file" class="form-control input-sm" name="passport_photo" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Resume (CV)*</label>
                <input type="file" class="form-control input-sm" name="resume" required>
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