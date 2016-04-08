@extends('common.default')
@section ('content')
<table class="table">
	<tr>
	<th>ID</th>
	<th>UserName</th>
	<th>Action</th>
	<th>Target</th>
	<th>Remarks</th>
	<th>TimeStamp</th>
	</tr>
	@foreach ($logs as $log)
		<tr>
			<td>{{$log->id}}</td>
			<td>{{$log->u_name}}</td>
			<td>{{$log->action}}</td>
			<td>{{$log->target}}</td>
			<td>{{$log->remarks or ""}}</td>
			<td>{{$log->created_at}}</td>
		</tr>
	@endforeach
</table>
@stop