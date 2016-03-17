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
</div>
	{!! Form::open() !!}
	<div class="row">
		<div class="col-md-6">
			<label>Site</label>
			<input name="site" class="form-control general" id="site">
			{{-- <select name="site" class="form-control general" id="site">
				<option>Main Office</option>
				<option>New York</option>
			</select> --}}
		</div>
		<div class="col-md-6">
			<label>Location</label>
			{{-- <input name="location" class="form-control general" id="location"> --}}
			<select name="location" class="form-control general" id="location">
				<option value="Pennsylvania">Pennsylvania</option>
				<option value="Commerce">Commerce</option>
				<option value="Upland">Upland</option>
				<option value="Indiana">Indiana</option>
				<option value="Marion">Marion</option>
				<option value="Innovation Campus">Innovation Campus</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Serial Number</label>
			<input type="text"  name="serial_number" class="form-control general" id="serial_number">
		</div>
		<div class="col-md-6">
			<label>Asset Tag</label>
			<input type="text" name="asset_tag" class="form-control general" id="asset_tag">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Condition</label>
			<select name="condition" class="form-control general" id="condition">
				<option value="new">New</option>
				<option value="used">Used</option>
			
			</select>
		</div>
		<div class="col-md-6">
			<label>Additional Info</label>
			<textarea name="additional_info" class="form-control general" id="additional_info"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Asset Type</label>
			<input name="asset_type" class="form-control general" id="asset_type">
			{{-- <select name="asset_type" class="form-control general" id="asset_type">
				<option>Electronics</option>
				<option>Wood</option>
			</select> --}}
		</div>
		<div class="col-md-6">
			<label>Asset Type Description</label>
			<textarea name="asset_description" class="form-control general" id="asset_description"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Manufacturer</label>
			<input text="text" name="manufacturer" class="form-control general" id="manufacturer">
				
		</div>
		<div class="col-md-6 bottom-margin-sm">
			<label>Model</label>

			<input type="text" name="model" class="form-control general" id="model">
				
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 ">
			<label>Vendor Number</label>
			<input type="text" name="vendor_number" class="form-control general" id="vendor_number">
			
		</div>
		<div class="col-md-6">
		<p>&nbsp</p>
			<input type="submit"  class="btn btn-primary form-control" id="done" value="Add Asset">
		</div>
	</div>
	{!! Form::close() !!}
@stop