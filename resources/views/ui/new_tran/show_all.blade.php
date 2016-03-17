@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#data').DataTable( {
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 5 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }
    } );
} );
</script>
@stop
@section('content')
<div class="row">
<table class="form-striped col-md-12" id="data" cellspacing="0" width="100%">
	<thead>
		<th>Transaction ID</th>
		<th>Type</th>
		<th>Action</th>
		<th>Costs</th>
		<th>Notes</th>
		<th>Created At</th>
		<th>Updated At</th>
	</thead>
	<tbody>
		@foreach($trans as $tr)
		<tr>
			<td>{{$tr->id}}</td>
			<td>{{$tr->type}}</td>
			<td>{{$tr->action}}</td>
			<td>${{$tr->costs}}</td>
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