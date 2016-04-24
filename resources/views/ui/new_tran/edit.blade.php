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
<h3>Asset Tag: {{$trans->asset_tag}}</h3>
</div>
    {!! Form::open() !!}
    <div class="row">
        <div class="col-md-6">
            <label>Type</label>
            <input name="type" class="form-control trans" id="type" value="{{$trans->type}}">
        </div>
        <div class="col-md-6">
            <label>Action</label>
            <input name="action" class="form-control trans" id="action" value="{{$trans->action}}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Notes</label>
            <input type="text"  name="notes" class="form-control trans" id="notes" value="{{$trans->notes}}">
        </div>
        <div class="col-md-6">
            <label>Costs</label>
            <input type="text" name="costs" class="form-control trans" id="asset_tag" value="{{$trans->costs}}">
        </div>
    </div>
    <input type="hidden" name="asset_tag" value="{{$trans->asset_tag}}">

    <div class="row">
        <div class="col-md-6 ">
            <label>Date</label>
            <input type="date" name="date" class="form-control trans" id="date" value="{{$trans->date}}">

            <input type="hidden" name="id" value="{{$trans->id}}">
        </div>
        <div class="col-md-6">
        <p>&nbsp</p>
            <input type="submit"  class="btn btn-primary form-control" id="done" value="Edit Transaction">
        </div>
    </div>
    {!! Form::close() !!}
@stop