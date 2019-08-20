@extends('layouts.admin')
@section('content')
<h1>Users</h2>
<table class="table">
	
	@if((Session::has('deleteUser')))
		<p class="bg-danger">{{session('deleteUser')}}</p>
	@endif
	
	@if((Session::has('createUser')))
		<p class="bg-danger">{{session('createUser')}}</p>
	@endif
	@if((Session::has('updateUser')))
		<p class="bg-danger">{{session('updateUser')}}</p>
	@endif
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Student Id</th>
			<th>Role</th>
			<th>Active</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>
	<tbody>
		@if($users)
			
			@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->student_id}}</td>
			<td>{{$user->role->name}}</td>
			<td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
			<td>{{$user->created_at->diffForHumans()}}</td>
			<td>{{$user->updated_at->diffForHumans()}}</td>
		</tr>

		@endforeach

		@endif
	</tbody>
	
</table>
@endsection