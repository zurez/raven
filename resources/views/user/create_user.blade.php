@extends('common.default')
@section('content')
<div class="row">
  @if (count($errors) > 0)

                
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                            {{ $error }} </div>
                        @endforeach
     @endif
      </div>
<form class="form-horizontal" method="POST">
<fieldset>
{{-- {!! csrf !!} --}}
<!-- Form Name -->
<legend>Add new User</legend>
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="mcjohnny" class="form-control input-md" required="">
  <span class="help-block">Chose an easy to remember username</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="placeholder" class="form-control input-md" required="">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password">Confirm Password </label>
  <div class="col-md-4">
    <input id="confirm_password" name="password_confirmation" type="password" placeholder="confirm password" class="form-control input-md" required="">
    <span class="help-block">Min 5 letters. Alpha numeric allowed</span>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="roles">Role</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="roles-0">
      <input type="radio" name="role" id="roles-0" value="admin" checked="checked">
      Admin
    </label>
	</div>
  <div class="radio">
    <label for="roles-1">
      <input type="radio" name="role" id="roles-1" value="normal">
      Normal User
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Adam Angelo" class="form-control input-md" required="">
  <span class="help-block">A name to identify</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  	<input type="submit" value="Add User" class="btn btn-primary">
{{--     <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button> --}}
  </div>
</div>

</fieldset>
</form>


@stop