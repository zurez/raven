@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('#data').DataTable();
});
</script>
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
				<th>Vendor Number</th>
				<th>Location</th>
				<th>Model</th>
				<th>Action</th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($asset as $ass)
			<tr class="margin-bottom-sm">
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
					<a href="{{url('asset/edit',$ass->id)}}" class="btn btn-primary">Edit </a> &nbsp
					<a href="{{url('asset/delete',$ass->id)}}" class="btn btn-danger">Delete </a>
					<a href="{{url('asset/maintenance',$ass->id)}}" class="btn btn-success">Maintenance </a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop