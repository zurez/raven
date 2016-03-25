@extends('common.default')
@section('content')
<div class="row">
@if(isset($message))
<div class="alert alert-success">{{$message }}</div>
@endif
</div>
<div class="row">
	@if (count($errors) > 0)

                
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                            {{ $error }} </div>
                        @endforeach
     @endif
     <div class="row">
     <h5 class="alert alert-danger">You are adding maintenance for asset having tag : {{$asset->asset_tag}}</h5>
     <h6 class="alert alert-warning"> Warranty Ends: {{$asset->warranty_ends}}</h6>
      </div>
<div class="row">
{!! Form::open(array('url'=>'maintenance/adding')) !!}
	<input type="hidden" value="{{$asset_id}}" name="asset_id">
	<div class="row">
		<div class="col-md-4">
		<label>Maintenance Name</label>
		<input type="text" name="maintenance_name"class="form-control" value="{{ old('maintenance_name') }}">
		<label>Assigned To </label>
		<input type="text" name="assigned_to" class="form-control" value="{{ old('assigned_to') }}"> 
		<label>Asset Tag</label>
		<input type="text" name="asset_tag_id" class="form-control" value="{{$asset->asset_tag}}" disabled="disable">
		<label>Instructions</label>
		<input type="text" name="instructions" class="form-control" value="{{ old('instructions') }}">
		</div>
		<div class="col-md-2"> </div>
		<div class="col-md-4">
			<label>Warranty Begins</label>
			<input type="date" class="form-control" name="warranty_begin" value="{{$asset->warranty_begins}}">
			<label>Warranty Ends</label>
			<input type="date" class="form-control" name="warranty_ends" value="{{$asset->warranty_ends}}">
			<label>Assigned Date</label>
			<input type="date" class="form-control" name="assigned_date" value="{{ old('assigned_date') }}">
			<label>Contact</label>
			<input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
			<div class="row">&nbsp</div>
			<input  type="submit" class="btn btn-primary pull-left" value="Add maintenance">
		</div>
	</div>

	
	
{!! Form::close() !!}
</div>
@stop