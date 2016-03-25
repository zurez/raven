@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#data').DataTable();
} );
</script>
@stop
@section('content')
<div class="row">
<table class="form-striped col-md-12" id="data" cellspacing="0" width="100%">
	<thead>
		<th>Transaction ID</th>
        <th>Asset Tag</th>
		<th>Type</th>
		<th>Action</th>
		<th>Costs</th>
		<th>Notes</th>
		<th>Created At</th>
		<th>Updated At</th>
	</thead>
	<tbody>
		@foreach($trans as $tr)
            @foreach($asset as $as)
		<tr>
			<td>{{$tr->id}}</td>
            @if ($tr->asset_id==$as->id)
            <td>{{$as->asset_tag}}</td>
            @endif
			<td>{{$tr->type}}</td>
			<td>{{$tr->action}}</td>
            @if ($tr->asset_id==$as->id)
            <td>{{$as->costs}}</td>
            @endif
			{{-- <td>${{$asset->costs}}</td> --}}
			<td>{{$tr->notes}}</td>
			<td>{{$tr->created_at}}</td>
			<td>{{$tr->updated_at}}</td>

	{{-- 		<td>{{$tr->}}</td>
			<td>{{$tr->}}</td>
 --}}
		</tr>
        @endforeach
		@endforeach
	</tbody>
</table>
</div>

</div>
@stop