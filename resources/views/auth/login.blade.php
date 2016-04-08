@extends('common.default')
@section('content')
<div class="row">
    @if (count($errors) > 0)

                
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                            {{ $error }} </div>
                        @endforeach
     @endif
     <div class="row">

<div class="col-md-4"> </div>
<div class="col-md-4">

<form method="POST" class="form ">
    {!! csrf_field() !!}

    <div>
        Username    
        <input type="text" name="username" value="{{old('username')}} " class="form-control">
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