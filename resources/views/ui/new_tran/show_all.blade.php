@extends('common.default')
@section('head')
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.11/api/sum().js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
@stop
@section('content')
<div class="row">
<table class="table" id="data" cellspacing="0" width="100%">
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
	 <tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
	<tbody>
		@foreach($trans as $tr)
            @foreach($asset as $as)
		<tr>
			<td>{{$tr->id}}</td>
            @if ($tr->asset_id==$as->id)
            <td>{{$as->asset_tag}}</td>
            @else
            <td>"No asset tag found"</td>
            @endif
			<td>{{$tr->type}}</td>
			<td>{{$tr->action}}</td>
            @if ($tr->asset_id==$as->id)
            <td>{{$as->costs}}</td>
            @else{
            <td>No Cost found</td>
            }
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