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
        <li role="presentation"><a href="{{URL::to('provider/personal')}}">Personal Information</a></li> 
        <li role="presentation"><a href="{{URL::to('provider/contact')}}">Contact Information</a></li> 
        <li role="presentation"><a href="{{URL::to('provider/professional')}}">Professional Credentials</a></li> 
        <li role="presentation" class="follow-active"><a href="{{URL::to('provider/education')}}">Education Information</a></li>
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
                <input type="text" class="form-control input-sm" name="current_employer_name" value="{{ Input::old('current_employer_name') != NULL ? Input::old('current_employer_name') : $physician->current_employer_name }}" >
                <span class="badge alert-danger">{{ ($errors->has('current_employer_name') ? $errors->first('current_employer_name') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Email*</label>
                <input type="email" class="form-control input-sm" name="current_employer_email" value="{{ Input::old('current_employer_email') != NULL ? Input::old('current_employer_email') : $physician->current_employer_email }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_email') ? $errors->first('current_employer_email') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Phone*</label>
                <input type="tel" class="form-control input-sm" name="current_employer_phone" value="{{ Input::old('current_employer_phone') != NULL ? Input::old('current_employer_phone') : $physician->current_employer_phone }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_phone') ? $errors->first('current_employer_phone') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Address*</label>
                <input type="text" class="form-control input-sm" name="current_employer_address" value="{{ Input::old('current_employer_address') != NULL ? Input::old('current_employer_address') : $physician->current_employer_address }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_address') ? $errors->first('current_employer_address') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Fax*</label>
                <input type="text" class="form-control input-sm" name="current_employer_fax" value="{{ Input::old('current_employer_fax') != NULL ? Input::old('current_employer_fax') : $physician->current_employer_fax }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_fax') ? $errors->first('current_employer_fax') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Website*</label>
                <input type="url" class="form-control input-sm" name="current_employer_website" value="{{ Input::old('current_employer_website') != NULL ? Input::old('current_employer_website') : $physician->current_employer_website }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_website') ? $errors->first('current_employer_website') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Contact Phone*</label>
                <input type="text" class="form-control input-sm" name="current_employer_contact_phone" value="{{ Input::old('current_employer_contact_phone') != NULL ? Input::old('current_employer_contact_phone') : $physician->current_employer_contact_phone }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_contact_phone') ? $errors->first('current_employer_contact_phone') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Current Employer Contact Email*</label>
                <input type="email" class="form-control input-sm" name="current_employer_contact_email" value="{{ Input::old('current_employer_contact_email') != NULL ? Input::old('current_employer_contact_email') : $physician->current_employer_contact_email }}">
                <span class="badge alert-danger">{{ ($errors->has('current_employer_contact_email') ? $errors->first('current_employer_contact_email') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Passport Photo*</label>
                <input type="file" class="form-control input-sm" name="passport_photo" >
                <span class="badge alert-danger">{{ ($errors->has('passport_photo') ? $errors->first('passport_photo') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Resume (CV)*</label>
                <input type="file" class="form-control input-sm" name="resume" >
                <span class="badge alert-danger">{{ ($errors->has('resume') ? $errors->first('resume') : '') }}</span>
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