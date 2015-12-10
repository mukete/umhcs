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
                <input type="text" class="form-control input-sm" name="first_name" value="{{ Input::old('first_name') != NULL ? Input::old('first_name') : Auth::user()->first_name }}" >
                <span class="badge alert-danger">{{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}</span>
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
                <input type="text" class="form-control input-sm" name="last_name" value="{{ Input::old('last_name') != NULL ? Input::old('last_name') : Auth::user()->last_name }}" >
                <span class="badge alert-danger">{{ ($errors->has('last_name') ? $errors->first('last_name') : '') }}</span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Date of Birth (DOB)</label>
                <input type="date" class="form-control input-sm" name="dob" value="{{ Input::old('dob') != NULL ? Input::old('dob') : Auth::user()->dob }}">
                <span class="badge alert-danger">{{ ($errors->has('dob') ? $errors->first('dob') : '') }}</span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Social Security Number (SSN)</label>
                <input type="number" class="form-control input-sm" name="ssn" value="{{ Input::old('ssn') != NULL ? Input::old('ssn') : Auth::user()->ssn }}">
                <span class="badge alert-danger">{{ ($errors->has('ssn') ? $errors->first('ssn') : '') }}</span>
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
                        <input type="radio" name="gender" value="M" {{ Auth::user()->gender == "M" ? 'checked' : ''}}>
                          Male
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="F"  {{ Auth::user()->gender == "F" ? 'checked' : ''}}>
                          Female
                      </label>
                    </div>
                  </div>
                  <span class="badge alert-danger">{{ ($errors->has('gender') ? $errors->first('gender') : '') }}</span>
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
                <span class="badge alert-danger">{{ ($errors->has('marital_status') ? $errors->first('marital_status') : '') }}</span>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Race</label>
                <select name="race" class='form-control input-sm'>
                  @foreach($races as $race)
                    <option value="{{$race->id}}">{{$race->name}}</option>
                  @endforeach
                </select>
                <span class="badge alert-danger">{{ ($errors->has('race') ? $errors->first('race') : '') }}</span>
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