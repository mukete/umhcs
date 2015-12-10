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
        <li role="presentation"><a href="{{URL::to('provider/personal')}}">Personal Information</a></li> 
        <li role="presentation" class="follow-active"><a href="{{URL::to('provider/contact')}}">Contact Information</a></li> 
        <li role="presentation" class="follow-dead"><a href="">Professional Credentials</a></li> 
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
                  @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>
                <span class="badge alert-danger">{{ ($errors->has('country_origin') ? $errors->first('country_origin') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Nationality</label>
                <select name="nationality" class='form-control input-sm'>
                  @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>
                <span class="badge alert-danger">{{ ($errors->has('nationality') ? $errors->first('nationality') : '') }}</span>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Address*</label>
                <input type="text" class="form-control input-sm" name="residence_address" value="{{ Input::old('residence_address') != NULL ? Input::old('residence_address') : $physician->residence_address }}">
                <span class="badge alert-danger">{{ ($errors->has('residence_address') ? $errors->first('residence_address') : '') }}</span>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Email*</label>
                <input type="email" class="form-control input-sm" name="residence_email" value="{{ Input::old('residence_email') != NULL ? Input::old('residence_email') : $physician->residence_email }}">
                <span class="badge alert-danger">{{ ($errors->has('residence_email') ? $errors->first('residence_email') : '') }}</span>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Phone*</label>
                <input type="fax" class="form-control input-sm" name="residence_phone" value="{{ Input::old('residence_phone') != NULL ? Input::old('residence_phone') : $physician->residence_phone }}">
                <span class="badge alert-danger">{{ ($errors->has('residence_phone') ? $errors->first('residence_phone') : '') }}</span>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Fax*</label>
                <input type="text" class="form-control input-sm" name="residence_fax" value="{{ Input::old('residence_fax') != NULL ? Input::old('residence_fax') : $physician->residence_fax }}">
                <span class="badge alert-danger">{{ ($errors->has('residence_fax') ? $errors->first('residence_fax') : '') }}</span>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Skype ID</label>
                <input type="text" class="form-control input-sm" name="skype" value="{{ Input::old('skype') != NULL ? Input::old('skype') : $physician->skype }}">
                <span class="badge alert-danger">{{ ($errors->has('skype') ? $errors->first('skype') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Facebook Account</label>
                <input type="url" class="form-control input-sm" name="facebook" value="{{ Input::old('facebook') != NULL ? Input::old('facebook') : $physician->facebook }}">
                <span class="badge alert-danger">{{ ($errors->has('facebook') ? $errors->first('facebook') : '') }}</span>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Country to Serve</label>
                <select name="country_serve" class='form-control input-sm'>
                  @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>
                <span class="badge alert-danger">{{ ($errors->has('country_serve') ? $errors->first('country_serve') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Date &amp; Time to Contact</label>
                <input type="text" name="contact_date" class="form-control form_datetime input-sm" value="{{ Input::old('contact_date') != NULL ? Input::old('contact_date') : $physician->contact_date }}">
                <span class="badge alert-danger">{{ ($errors->has('contact_date') ? $errors->first('contact_date') : '') }}</span>
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