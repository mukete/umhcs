@extends('layouts.template')

@section('title')
  @parent Personal Information 
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
        <li role="presentation" class="follow-active"><a href="{{URL::to('provider/personal')}}">Personal Information</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Contact Information</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Professional Credentials</a></li> 
        <li role="presentation" class="follow-dead"><a href="#">Education Information</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Term Agreement</a></li>
        <li role="presentation" class="follow-dead"><a href="#">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Personal Information</h4>
      <p>
        <form action="{{URL::to('provider/personal')}}" method="post">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name *</label>
                <input type="text" class="form-control input-sm" name="first_name" >
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control input-sm" name="middle_name" >
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name *</label>
                <input type="text" class="form-control input-sm" name="last_name" >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" class="form-control input-sm" name="dob" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Social Security Number (SSN)</label>
                <input type="number" class="form-control input-sm" name="ssn">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Gender</label>
                <div class="row">

                  <div class="col-md-5 col-md-offset-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="M">
                          Male
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="F">
                          Female
                      </label>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Marital Status</label>
                <select name="marital_status" class='form-control input-sm'>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Race</label>
                <select name="race" class='form-control input-sm'>
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

          <button type="submit" class="btn btn-success">Next >></button>
        </form>
      </p>
    </div>
  </div>
  <div class="hs_margin_30"></div>
</div>

@stop