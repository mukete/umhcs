@extends('layouts.template')

@section('title')
  @parent Summary 
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
        <li role="presentation"><a href="{{URL::to('provider/education')}}">Education Information</a></li>
        <li role="presentation"><a href="{{URL::to('provider/term')}}">Term Agreement</a></li>
        <li role="presentation" class="follow-active"><a href="{{URL::to('provider/summary')}}">Summary</a></li>
      </ul>

      </p>
    </div>
    <div class="col-lg-8">
      <h4 class="hs_heading">Provider Details Summary</h4>
      <p>
        <form action="{{URL::to('provider/summary')}}" method="post" enctype="multipart/form-data">

          <div class="row">

            <div class="col-md-12">
              <table class="table">
                <tr>
                  <th>UserEmail</th>
                  <td>{{Auth::user()->email}}</td>
                </tr>
                <tr>
                  <th>Frist Name</th>
                  <td>{{Auth::user()->first_name}}</td>
                </tr>
                <tr>
                  <th>Middle Name</th>
                  <td>{{Auth::user()->middle_name}}</td>
                </tr>
                <tr>
                  <th>Last Name</th>
                  <td>{{Auth::user()->last_name}}</td>
                </tr>
                <tr>
                  <th>Marital Status</th>
                  <td>{{Auth::user()->marital_status}}</td>
                </tr>
                <tr>
                  <th>Date of Birth</th>
                  <td>{{Auth::user()->dob}}</td>
                </tr>
                <tr>
                  <th>Social Security Number</th>
                  <td>{{Auth::user()->ssn}}</td>
                </tr>
                <tr>
                  <th>Race</th>
                  <td>{{Race::find(Auth::user()->race_id)->name}}</td>
                </tr>
                <tr>
                  <th>Gender</th>
                  <td>{{Auth::user()->gender}}</td>
                </tr>
              </table>

              <table class="table">
                <tr>
                  <th>Country of Origin</th>
                  <td>{{$physician->country_origin}}</td>
                </tr>
                <tr>
                  <th>Nationality</th>
                  <td>{{$physician->nationality}}</td>
                </tr>
                <tr>
                  <th>Residence Address</th>
                  <td>{{$physician->residence_address}}</td>
                </tr>
                <tr>
                  <th>Residence Email</th>
                  <td>{{$physician->residence_email}}</td>
                </tr>
                <tr>
                  <th>Residence Phone</th>
                  <td>{{$physician->residence_phone}}</td>
                </tr>
                <tr>
                  <th>Residence Fax</th>
                  <td>{{$physician->residence_fax}}</td>
                </tr>
                <tr>
                  <th>Skype</th>
                  <td>{{$physician->skype}}</td>
                </tr>
                <tr>
                  <th>Facebook</th>
                  <td>{{$physician->facebook}}</td>
                </tr>
                <tr>
                  <th>Country to Serve</th>
                  <td>{{$physician->country_to_serve}}</td>
                </tr>
                <tr>
                  <th>Contact Date</th>
                  <td>{{$physician->contact_date}}</td>
                </tr>
                <tr>
                  <th>Profession</th>
                  <td>{{$physician->profession}}</td>
                </tr>
                <tr>
                  <th>Specialties</th>
                  <td>{{$physician->specialties}}</td>
                </tr>
                <tr>
                  <th>Licence</th>
                  <td>{{$physician->licence}}</td>
                </tr>
                <tr>
                  <th>Licensure Country</th>
                  <td>{{$physician->licensure_country}}</td>
                </tr>
                <tr>
                  <th>Licensure State</th>
                  <td>{{$physician->licensure_state}}</td>
                </tr>
                <tr>
                  <th>Practice Name</th>
                  <td>{{$physician->practice_name}}</td>
                </tr>
                <tr>
                  <th>Practice Address</th>
                  <td>{{$physician->practice_address}}</td>
                </tr>
                <tr>
                  <th>Practice Phone</th>
                  <td>{{$physician->practice_phone}}</td>
                </tr>
                <tr>
                  <th>Practice Email</th>
                  <td>{{$physician->practice_email}}</td>
                </tr>
                <tr>
                  <th>Practice Fax</th>
                  <td>{{$physician->practice_fax}}</td>
                </tr>
                <tr>
                  <th>Practice Website</th>
                  <td>{{$physician->practice_website}}</td>
                </tr>
                <tr>
                  <th>Current Employer Name</th>
                  <td>{{$physician->practice_name}}</td>
                </tr>
                <tr>
                  <th>Current Employer Email</th>
                  <td>{{$physician->current_employer_name}}</td>
                </tr>
                <tr>
                  <th>Current Employer Phone</th>
                  <td>{{$physician->current_employer_phone}}</td>
                </tr>
                <tr>
                  <th>Current Employer Address</th>
                  <td>{{$physician->current_employer_address}}</td>
                </tr>
                <tr>
                  <th>Current Employer Fax</th>
                  <td>{{$physician->current_employer_fax}}</td>
                </tr>
                <tr>
                  <th>Current Employer Website</th>
                  <td>{{$physician->current_employer_website}}</td>
                </tr>
                <tr>
                  <th>Current Employer Contact Phone</th>
                  <td>{{$physician->current_employer_contact_phone}}</td>
                </tr>

                <tr>
                  <th>Current Employer Contact Email</th>
                  <td>{{$physician->current_employer_contact_phone}}</td>
                </tr>

                <tr>
                  <th>Photo</th>
                  <td><img src="{{URL::to('photos/'.$physician->passport_photo)}}" height="100"></td>
                </tr>

                <tr>
                  <th>Resume (CV)</th>
                  <td><a href="" class="btn btn-success btn-xs">download/view</a></td>
                </tr>

              </table>

            </div>

          </div>


          <button type="submit" class="btn btn-success">Confirm &amp; Submit >></button>
        </form>
      </p>
    </div>
  </div>
  <div class="hs_margin_30"></div>
</div>

@stop