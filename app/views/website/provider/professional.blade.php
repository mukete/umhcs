@extends('layouts.template')

@section('title')
  @parent Professional Credentials 
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
        <li role="presentation" class="follow-active"><a href="#">Professional Credentials</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Education Information</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Term Agreement</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Professional Credentials</h4>
      <p>
        <form action="{{URL::to('provider/professional')}}" method="post">

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>Profession*</label>
                <input type="text" class="form-control input-sm" name="profession" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Specialities*</label>
                <input type="text" class="form-control input-sm" name="specialities" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Licence*</label>
                <input type="text" class="form-control input-sm" name="licence" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Licensure Country*</label>
                <input type="text" class="form-control input-sm" name="licensure_country" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Licencsure State*</label>
                <input type="text" class="form-control input-sm" name="licensure_state" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Name*</label>
                <input type="text" class="form-control input-sm" name="practice_name" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Address*</label>
                <input type="text" class="form-control input-sm" name="practice_address" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Phone*</label>
                <input type="tel" class="form-control input-sm" name="practice_phone" required>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Email*</label>
                <input type="email" class="form-control input-sm" name="practice_email" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Fax*</label>
                <input type="text" class="form-control input-sm" name="practice_fax" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Website*</label>
                <input type="url" class="form-control input-sm" name="practice_website" required>
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