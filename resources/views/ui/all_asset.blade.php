@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('#data').DataTable();
});
</script>
<style type="text/css">
	tr{
		margin-bottom: 100px;
	}
</style>
@stop
@section('content')
<div class="row">
	<table id="data" class="table-striped col-md-12">
		<thead>
			<tr>
				<th>Asset Tag</th>
				<th>Serial Number</th>
				<th>Site</th>
				<th>Condition</th>
				<th>Asset Type</th>
				<th>Manufacturer</th>
				<th>Vendor</th>
				<th>Location</th>
				<th>Model</th>
				<th>Action</th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($asset as $ass)
			<tr class="">
				<td>{{$ass->asset_tag}}</td>
				<td>{{$ass->serial_number}}</td>
				<td>{{$ass->site}}</td>
				<td>{{$ass->condition}}</td>
				<td>{{$ass->asset_type}}</td>
				<td>{{$ass->manufacturer}}</td>
				<td>{{$ass->vendor_number}}</td>
				<td>{{$ass->location}}</td>
				<td>{{$ass->model}}</td>
				<td>
					<a href="{{url('asset/edit',$ass->id)}}" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					{{-- <a href="" class="btn btn-primary">Edit </a> &nbsp --}}
					<a href="{{url('asset/delete',$ass->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
					<a href="{{url('asset/maintenance',$ass->id)}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-cog"></span> Maint</a>
					<a href="{{url('transaction/show',$ass->id)}}" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-registration-mark"></span> Tran</a>
		
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop