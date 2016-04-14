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
<table class="form-striped col-md-12" id="data">
	<thead>
		<th>Transaction ID</th>
		<th>Asset Tag</th>
		<th>Type</th>
		<th>Action</th>
		<th>Notes</th>
		<th>Costs</th>
		<th>Created At</th>
		<th>Updated At</th>
	</thead>
	<tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
	<tbody>
	<tbody>
		@foreach($trans as $main)
		<tr>
			<td>{{$main->id}}</td>
			<td>{{$asset->asset_tag}}</td>
			<td>{{$main->type}}</td>
			<td>{{$main->action}}</td>
			<td>{{$main->notes}}</td>
			<td>${{$main->costs}}</td>
			<td>{{$main->created_at}}</td>
			<td>{{$main->update_at or "no updates"}}</td>
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
	<a href="{{url('transaction/new',$asset_id)}}" class="btn btn-primary">Add New Transaction</a>
	@endif
</div>
@stop