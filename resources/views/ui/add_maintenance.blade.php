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
{!! Form::open(array('url'=>'maintenance/adding')) !!}
	<input type="hidden" value="{{$asset_id}}" name="asset_id">
	<div class="row">
		<div class="col-md-4">
		<label>Maintenance Name</label>
		<input type="text" name="maintenance_name"class="form-control">
		<label>Assigned To </label>
		<input type="text" name="assigned_to" class="form-control"> 
		<label>Asset Tag ID</label>
		<input type="text" name="asset_tag_id" class="form-control">
		<label>Instructions</label>
		<input type="text" name="instructions" class="form-control">
		</div>
		<div class="col-md-2"> </div>
		<div class="col-md-4">
			<label>Warranty Begins</label>
			<input type="date" class="form-control" name="warranty_begin">
			<label>Warranty Ends</label>
			<input type="date" class="form-control" name="warranty_ends">
			<label>Assigned Date</label>
			<input type="date" class="form-control" name="assigned_date">
			<label>Contact</label>
			<input type="text" class="form-control" name="contact">
			<div class="row">&nbsp</div>
			<input  type="submit" class="btn btn-primary pull-left" value="Add maintenance">
		</div>
	</div>

	
	
{!! Form::close() !!}
</div>
@stop