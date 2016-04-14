@extends('common.default')
@section('head')
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.11/api/sum().js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', {
            	extend:'excel',
            	exportOptions:{columns:[0,1,2,3,4,5,6,7,8]}
            }, 'pdf', 'print'
        ]
    } );
} );

</script>
@stop
@section('content')
<div class="row">
<h4>Grand Total Expense: <span style= "color:red;">$ {{$cost or ""}}</span></h4>
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
     
		<tr>
			<td>{{$tr->id}}</td>
            <td>{{$tr->asset_tag}}</td>
           
			<td>{{$tr->type}}</td>
			<td>{{$tr->action}}</td>
          
            <td>${{$tr->costs}}</td>
			{{-- <td>${{$asset->costs}}</td> --}}
			<td>{{$tr->notes}}</td>
			<td>{{$tr->created_at}}</td>
			<td>{{$tr->updated_at}}</td>

	{{-- 		<td>{{$tr->}}</td>
			<td>{{$tr->}}</td>
 --}}
		</tr>
     
		@endforeach
	</tbody>
</table>
</div>

</div>
@stop