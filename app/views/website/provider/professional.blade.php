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
        <li role="presentation"><a href="{{URL::to('provider/personal')}}">Personal Information</a></li> 
        <li role="presentation"><a href="{{URL::to('provider/contact')}}">Contact Information</a></li> 
        <li role="presentation" class="follow-active"><a href="{{URL::to('provider/professional')}}">Professional Credentials</a></li> 
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
                <input type="text" class="form-control input-sm" name="profession" value="{{ Input::old('profession') != NULL ? Input::old('profession') : $physician->profession }}">
                <span class="badge alert-danger">{{ ($errors->has('profession') ? $errors->first('profession') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Specialities*</label>
                <input type="text" class="form-control input-sm" name="specialities" value="{{ Input::old('specialities') != NULL ? Input::old('specialities') : $physician->specialities }}">
                <span class="badge alert-danger">{{ ($errors->has('specialities') ? $errors->first('specialities') : '' ) }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Licence*</label>
                <input type="text" class="form-control input-sm" name="licence" value="{{ Input::old('licence') != NULL ? Input::old('licence') : $physician->licence }}">
                <span class="badge alert-danger">{{ ($errors->has('licence') ? $errors->first('licence') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Licensure Country*</label>
                <input type="text" class="form-control input-sm" name="licensure_country" value="{{ Input::old('licensure_country') != NULL ? Input::old('licensure_country') : $physician->licensure_country }}">
                <span class="badge alert-danger">{{ ($errors->has('licensure_country') ? $errors->first('licensure_country') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Licencsure State*</label>
                <input type="text" class="form-control input-sm" name="licensure_state" value="{{ Input::old('licensure_state') != NULL ? Input::old('licensure_state') : $physician->licensure_state }}">
                <span class="badge alert-danger">{{ ($errors->has('licensure_state') ? $errors->first('licensure_state') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Name*</label>
                <input type="text" class="form-control input-sm" name="practice_name" value="{{ Input::old('practice_name') != NULL ? Input::old('practice_name') : $physician->practice_name }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_name') ? $errors->first('practice_name') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Address*</label>
                <input type="text" class="form-control input-sm" name="practice_address" value="{{ Input::old('practice_address') != NULL ? Input::old('practice_address') : $physician->practice_address }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_address') ? $errors->first('practice_address') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Phone*</label>
                <input type="tel" class="form-control input-sm" name="practice_phone" value="{{ Input::old('practice_phone') != NULL ? Input::old('practice_phone') : $physician->practice_phone }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_phone') ? $errors->first('practice_phone') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Email*</label>
                <input type="email" class="form-control input-sm" name="practice_email" value="{{ Input::old('practice_email') != NULL ? Input::old('practice_email') : $physician->practice_email }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_email') ? $errors->first('practice_email') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Fax*</label>
                <input type="text" class="form-control input-sm" name="practice_fax" value="{{ Input::old('practice_fax') != NULL ? Input::old('practice_fax') : $physician->practice_fax }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_fax') ? $errors->first('practice_fax') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Practice Website*</label>
                <input type="url" class="form-control input-sm" name="practice_website" value="{{ Input::old('practice_website') != NULL ? Input::old('practice_website') : $physician->practice_website }}">
                <span class="badge alert-danger">{{ ($errors->has('practice_website') ? $errors->first('practice_website') : '') }}</span>
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