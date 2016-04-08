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
<div class="row">
<h3>Asset Tag: {{$asset->asset_tag}}</h3>
</div>
    {!! Form::open() !!}
    <div class="row">
        <div class="col-md-6">
            <label>Type</label>
            <input name="type" class="form-control trans" id="type">
            {{-- <select name="site" class="form-control trans" id="site">
                <option>Main Office</option>
                <option>New York</option>
            </select> --}}
        </div>
        <div class="col-md-6">
            <label>Action</label>
            <input name="action" class="form-control trans" id="action">
           {{--  <select name="location" class="form-control trans" id="location">
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Commerce">Commerce</option>
                <option value="Upland">Upland</option>
                <option value="Indiana">Indiana</option>
                <option value="Marion">Marion</option>
                <option value="Innovation Campus">Innovation Campus</option>
            </select> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Notes</label>
            <input type="text"  name="notes" class="form-control trans" id="notes">
        </div>
        <div class="col-md-6">
            <label>Costs</label>
            <input type="text" name="costs" class="form-control trans" id="asset_tag">
        </div>
    </div>
    <input type="hidden" name="asset_tag" value="={{$asset->asset_tag}}">
   {{--  <div class="row">
        <div class="col-md-6">
            <label>Condition</label>
            <select name="condition" class="form-control trans" id="condition">
                <option value="new">New</option>
                <option value="used">Used</option>
            
            </select>
        </div>
        <div class="col-md-6">
            <label>Additional Info</label>
            <textarea name="additional_info" class="form-control trans" id="additional_info"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Asset Type</label>
            <input name="asset_type" class="form-control trans" id="asset_type">
            <select name="asset_type" class="form-control trans" id="asset_type">
                <option>Electronics</option>
                <option>Wood</option>
            </select>
        </div>
        <div class="col-md-6">
            <label>Asset Type Description</label>
            <textarea name="asset_description" class="form-control trans" id="asset_description"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Manufacturer</label>
            <input text="text" name="manufacturer" class="form-control trans" id="manufacturer">
                
        </div>
        <div class="col-md-6 bottom-margin-sm">
            <label>Model</label>

            <input type="text" name="model" class="form-control trans" id="model">
                
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-6 ">
           {{--  <label>Vendor Number</label>
            <input type="text" name="vendor_number" class="form-control trans" id="vendor_number"> --}}
            <input type="hidden" name="id" value="{{$id}}">
        </div>
        <div class="col-md-6">
        <p>&nbsp</p>
            <input type="submit"  class="btn btn-primary form-control" id="done" value="Add Transaction">
        </div>
    </div>
    {!! Form::close() !!}
@stop