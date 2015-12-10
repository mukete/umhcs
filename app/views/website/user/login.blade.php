@extends('layouts.template')

@section('title')
  @parent Login 
@stop

@section('content')

<div class="hs_page_title">
  <div class="container">
    <h3>Login</h3>
    <!-- <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Provider</a></li>
    </ul> -->
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-4">
      <h4 class="hs_heading">Welcome, please login.</h4>
      <p>
        <form action="{{URL::to('user/login')}}" method="post">



          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Email*</label>
                <input type="email" class="form-control input-sm" name="email" value="{{ Input::old('email') != NULL ? Input::old('email') : '' }}">
                <span class="badge alert-danger">{{ ($errors->has('email') ? $errors->first('email') : '') }}</span>
              </div>

              <div class="form-group">
                <label>Password*</label>
                <input type="password" class="form-control input-sm" name="password">
                <span class="badge alert-danger">{{ ($errors->has('password') ? $errors->first('password') : '') }}</span>
              </div>
            </div>    

          </div>

          <button type="submit" class="btn btn-success">Login</button>
        </form>
      </p>
    </div>
  </div>
  <div class="hs_margin_30"></div>
</div>

@stop