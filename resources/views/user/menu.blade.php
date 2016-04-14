@extends('common.default')
@section('content')
<a href="{{url('user/register')}}" class="btn btn-primary">Add new user</a>
<h3>All Users</h6>
<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Role</th>

			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
					<td>{{$user->username}}</td>
						<td>{{$user->role}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop