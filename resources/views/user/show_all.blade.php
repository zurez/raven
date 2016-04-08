@extends('common.default')
@section('content')
	<table class="table">
		@foreach($user as $u)
			<tr>
				<td>{{$u->name}}</td>
				<td>{{$u}}</td>
			</tr>
		@endforeach
	</table>

@stop