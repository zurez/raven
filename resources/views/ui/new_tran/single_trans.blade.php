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
				@if(Auth::user()->role=="admin")
		<th class="no-export">Action</th>
		@endif
	</thead>
	<tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
	
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
					@if(Auth::user()->role=="admin")
			<td class="no-export">
									<a href="{{url('transaction/updated',$main->id)}}" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					{{-- <a href="" class="btn btn-primary">Edit </a> &nbsp --}}

					<a href="{{url('transaction/delete',$main->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			</td>
			@endif
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