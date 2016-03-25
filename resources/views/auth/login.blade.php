@extends('common.default')
@section('content')
<div class="col-md-4"> </div>
<div class="col-md-4">
<form method="POST" class="form ">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }} " class="form-control">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>
</div>
@stop