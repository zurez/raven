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
			<input name="site" class="form-control general" id="site" value="{{$asset->site}}">
			{{-- <select name="site" class="form-control general" id="site">
				<option>Main Office</option>
				<option>New York</option>
			</select> --}}
			
		</div>
		<div class="col-md-6">
			<label>Location</label>
			{{-- <input name="location" class="form-control general" id="location"> --}}
			<select name="location" class="form-control general" id="location">
				<option value="Pennsylvania"
						<?php 
				if ($asset->location=="Pennsylvania") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Pennsylvania</option>
				<option value="Commerce"
						<?php 
				if ($asset->location=="Commerce") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Commerce</option>
				<option value="Upland"
						<?php 
				if ($asset->location=="Upland") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Upland</option>
				<option value="Indiana"
						<?php 
				if ($asset->location=="Indiana") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Indiana</option>
				<option value="Marion"
						<?php 
				if ($asset->location=="Marion") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Marion</option>
				<option value="Innovation Campus"
					<?php 
				if ($asset->location=="Innovation Campus") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Innovation Campus</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Serial Number</label>
			<input type="text"  name="serial_number" class="form-control general" id="serial_number" value="{{$asset->serial_number}}">
		</div>
		<div class="col-md-6">
			<label>Asset Tag</label>
			<input type="text" value="{{$asset->asset_tag}}" name="asset_tag" class="form-control general" id="asset_tag">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Condition</label>
			<select name="condition" class="form-control general" id="condition">
				<option value="new"
					<?php 
				if ($asset->condition=="new") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>New</option>
				<option value="used"
					<?php 
				if ($asset->condition=="new") {
					# code...
					echo "selected='selected'";
				}
			 ?>
				>Used</option>
			
			</select>
		</div>
		<input type="hidden" name="id" value="{{$asset->id}}">
		<div class="col-md-6">
			<label>Additional Info</label>
			<textarea name="additional_info" class="form-control general" id="additional_info" value="{{$asset->additional_info}}"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Asset Type</label>
			<input name="asset_type" class="form-control general" id="asset_type" value="{{$asset->asset_type}}">
			{{-- <select name="asset_type" class="form-control general" id="asset_type">
				<option>Electronics</option>
				<option>Wood</option>
			</select> --}}
		</div>
		<div class="col-md-6">
			<label>Asset Type Description</label>
			<textarea name="asset_description" class="form-control general" id="asset_description" value="{{$asset->asset_description}}"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Manufacturer</label>
			<input text="text" name="manufacturer" class="form-control general" id="manufacturer" value="{{$asset->manufacturer}}">
				
		</div>
		<div class="col-md-6 bottom-margin-sm">
			<label>Model</label>

			<input value="{{$asset->model}}" type="text" name="model" class="form-control general" id="model">
				
		</div>
	</div>
	<div class="row ">
		<div class="col-md-6 ">
			<label>Vendor</label>
			<input type="text" name="vendor_number" value="{{$asset->vendor_number}}" class="form-control general" id="vendor_number">
			
		</div>
		<div class="col-md-6"> 
		<label>Cost</label>
			<input type="text" name="costs" value="{{$asset->costs}}" class="form-control general" id="costs">
			
		</div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-6 pull-right">
		<div class="row"> </div>
				<input type="submit"  class="btn btn-primary " id="done" value="Update">
		</div>
	</div>
	{!! Form::close() !!}
@stop