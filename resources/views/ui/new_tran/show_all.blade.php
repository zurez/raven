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
<h4>Total Expense: <span style= "color:red;">$ {{$cost or ""}}</span></h4>
<table class="table" id="data" cellspacing="0" width="100%">
	<thead>
		<th>Transaction ID</th>
        <th>Asset Tag</th>
		<th>Type</th>
		<th>Action</th>
		<th>Cost</th>
		<th>Notes</th>
		<th>Date</th>
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
		@foreach($trans as $tr)
     
		<tr>
			<td>{{$tr->id}}</td>
            <td>{{$tr->asset_tag}}</td>
           
			<td>{{$tr->type}}</td>
			<td>{{$tr->action}}</td>
          
            <td>${{$tr->costs}}</td>
			{{-- <td>${{$asset->costs}}</td> --}}
			<td>{{$tr->notes}}</td>
			<td>{{$tr->date}}</td>
			<td>{{$tr->created_at}}</td>
			@if(Auth::user()->role=="admin")
			<td class="no-export">
									<a href="{{url('transaction/updated',$tr->id)}}" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					{{-- <a href="" class="btn btn-primary">Edit </a> &nbsp --}}

					<a href="{{url('transaction/delete',$tr->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			</td>
			@endif
			

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