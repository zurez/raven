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
            @if(isset($message))
            <div class="alert alert-success"> </div>
            @endif
</div>
	{!! Form::open() !!}
	<div class="row">
		<div class="col-md-6">
			<label>Site</label>
			<input name="site" class="form-control general" id="site" value="{{ old('site') }}">
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
					if (old('location')=="Pennsylvania") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Pennsylvania</option>
				<option value="Commerce"
				<?php
					if (old('location')=="Commerce") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Commerce</option>
				<option value="Upland"
					<?php
					if (old('location')=="Upland") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Upland</option>
				<option value="Indiana"
				<?php
					if (old('location')=="Indiana") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Indiana</option>
				<option value="Marion"
					<?php
					if (old('location')=="Marion") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Marion</option>
				<option value="Innovation Campus" 
					<?php
					if (old('location')=="Innovation Campus") {
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
			<input type="text"  name="serial_number" class="form-control general" id="serial_number" value="{{ old('serial_number') }}">
		</div>
		<div class="col-md-6">
			<label>Asset Tag</label>
			<input type="text" name="asset_tag" class="form-control general" id="asset_tag" value="{{ old('asset_tag') }}">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Condition</label>
			<select name="condition" class="form-control general" id="condition" value="{{ old('condition') }}">
				<option value="new" <?php
					if (old('condition')=="new") {
						# code...
						echo "selected='selected'";
					}
				?>
				>New</option>
				<option value="used"
					<?php
					if (old('condition')=="used") {
						# code...
						echo "selected='selected'";
					}
				?>
				>Used</option>
			
			</select>
		</div>
		<div class="col-md-6">
			<label>Additional Info</label>
			<textarea name="additional_info" class="form-control general" id="additional_info" >{{ old('additional_info') }}</textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Asset Type</label>
			<input name="asset_type" class="form-control general" id="asset_type" value="{{ old('asset_type') }}">
			{{-- <select name="asset_type" class="form-control general" id="asset_type">
				<option>Electronics</option>
				<option>Wood</option>
			</select> --}}
		</div>
		<div class="col-md-6">
			<label>Asset Type Description</label>
			<textarea name="asset_description" class="form-control general" id="asset_description" value="">{{ old('asset_description') }}</textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Manufacturer</label>
			<input text="text" name="manufacturer" class="form-control general" id="manufacturer" value="{{ old('manufacturer') }}">
				
		</div>
		<div class="col-md-6 bottom-margin-sm">
			<label>Model</label>

			<input type="text" name="model" class="form-control general" id="model"value="{{ old('model') }}">
				
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<label>Warranty Begin</label>
		<input type="date" class="form-control" name="warranty_begin" value="{{ old('warranty_begin') }}">
		</div>
		<div class="col-md-6">
			<label>Warranty Ends</label>
			<input type="date" class="form-control" name="warranty_ends" value="{{ old('warranty_ends') }}">
			</div>
	</div>
	<div class="row">
		<div class="col-md-6 ">
			<label>Vendor</label>
			<input type="text" name="vendor_number" class="form-control general" id="vendor_number" value="{{ old('vendor_number') }}">
			
		</div>
		<div class="col-md-6">
			<label>Cost</label>
			<input type="text"  class="general form-control" id="cost" value="{{old('cost')}}" name="costs">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<p>&nbsp</p>
			<input type="submit"  class="btn btn-primary form-control" id="done" value="Add Asset">
		</div>
	</div>
	{!! Form::close() !!}
{{$message or ""}}

@stop