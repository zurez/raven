@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('#data').DataTable(
    	);
});
</script>
@stop
@section('content')
<div class="row">
<table class="form-striped col-md-12" id="data">
	<thead>
		<th>Maintenance Name</th>
		<th>Assigned To</th>
		<th>Asset Tag Id</th>
		<th>Date</th>
		<th>Instructions</th>
	</thead>
	<tbody>
		@foreach($maintain as $main)
		<tr>
			<td>{{$main->maintenance_name}}</td>
			<td>{{$main->assigned_to}}</td>
			<td>{{$main->asset_tag_id}}</td>
			<td>{{$main->assigned_date}}</td>
			<td>{{$main->instructions}}</td>
	{{-- 		<td>{{$main->}}</td>
			<td>{{$main->}}</td>
 --}}
		</tr>
		@endforeach
	</tbody>
</table>
</div>
<div class="row">
	@if($asset_id!="null")
	<a href="{{url('maintenance/add',$asset_id)}}" class="btn btn-primary">Add New Maintenance</a>
	@endif
</div>
@stop