@extends('homepage.master')

@section('content')


<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="Jane" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="Bishop" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Company:</label>
          <div class="col-lg-8">
            <input class="form-control" value="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="janesemail@gmail.com" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="janeuser" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="11111122333" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="11111122333" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- 
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Personal details</legend>

<!-- Text input-->
<div class="form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label class="col-md-4 control-label" for="txtsname">Surname</label>  
  <div class="col-md-4">
  <input id="txtsname" name="txtsname" type="text" placeholder="Surname" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtfname">First Name</label>  
  <div class="col-md-4">
  <input id="txtfname" name="txtfname" type="text" placeholder="First Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtlname">Last Name</label>  
  <div class="col-md-4">
  <input id="txtlname" name="txtlname" type="text" placeholder="Last Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtemail">Email Address</label>  
  <div class="col-md-4">
  <input id="txtemail" name="txtemail" type="text" placeholder="Email Address" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtgender">Gender</label>
  <div class="col-md-4">
    <select id="txtgender" name="txtgender" class="form-control">
      <option value="1">Male</option>
      <option value="2">Female</option>
    </select>
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtjob">Profession</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="txtjob" name="txtjob" class="form-control" placeholder="Select Profession" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Select
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">teacher</a></li>
          <li><a href="#">scientist</a></li>
          <li><a href="#">student</a></li>
          <li><a href="#">driver</a></li>
          <li><a href="#">lecturer</a></li>
            <li><a href="#">Other</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtdesc">Self Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtdesc" name="txtdesc"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="txtimage">Photo Upload</label>
  <div class="col-md-4">
    <input id="txtimage" name="txtimage" class="input-file" type="file">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtpassword">Password </label>
  <div class="col-md-4">
    <input id="txtpassword" name="txtpassword" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtconfirmpass">Confirm Password</label>
  <div class="col-md-4">
    <input id="txtconfirmpass" name="txtconfirmpass" type="password" placeholder="" class="form-control input-md">
    <span class="help-block">forgot password?</span>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsave">Save Details</label>
  <div class="col-md-8">
    <button id="btnsave" name="btnsave" class="btn btn-success">save</button>
    <button id="btncancel" name="btncancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form> --}}

@endsection