@extends('layouts.template')

@section('title')
  @parent Contact Information 
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
        <li role="presentation" class="follow-active"><a href="#">Contact Information</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Professional Credentials</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Education Information</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Term Agreement</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Contact Information</h4>
      <p>
        <form action="{{URL::to('provider/contact')}}" method="post">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Country of Origin</label>
                <select name="country_origin" class='form-control input-sm'>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Nationality</label>
                <select name="nationality" class='form-control input-sm'>
                  <option value="1">American Indian or Alaska Native</option>
                  <option value="2">Asian</option>
                  <option value="3">Black or African American</option>
                  <option value="4">Native Hawaiian or Other Pacific Islander</option>
                  <option value="5">CaucasianHispanic or Latino</option>
                  <option value="6">Hispanic or Latino</option>
                  <option value="7">Not Hispanic of Latino</option>
                </select>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Address*</label>
                <input type="text" class="form-control input-sm" name="residence_address" required>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Email*</label>
                <input type="email" class="form-control input-sm" name="residence_email" required>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Phone*</label>
                <input type="fax" class="form-control input-sm" name="residence_fax" required>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Fax*</label>
                <input type="email" class="form-control input-sm" name="residence_email" required>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Skype ID</label>
                <input type="text" class="form-control input-sm" name="skype">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Facebook Account</label>
                <input type="url" class="form-control input-sm" name="facebook">
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Country to Serve</label>
                <select name="marital_status" class='form-control input-sm'>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Date &amp; Time to Contact</label>
                <input type="text" name="contact_date" class="form-control form_datetime input-sm" required/>
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