@extends('homepage.index')

@section('content')
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Login details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtemail">Email Address</label>  
  <div class="col-md-4">
  <input id="txtemail" name="txtemail" type="text" placeholder="Email Address" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtconfirmpass">Password</label>
  <div class="col-md-4">
    <input id="txtconfirmpass" name="txtpass" type="password" placeholder="" class="form-control input-md">
    <span class="help-block">forgot password?</span>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsave"></label>
  <div class="col-md-8">
    <button id="btnsave" name="btnsave" class="btn btn-success">Login</button>
    <button id="btncancel" name="btncancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>
@endsection