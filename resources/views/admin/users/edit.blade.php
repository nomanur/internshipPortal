@extends('layouts.admin')

@section('content')
	<h1>Create Users</h2>

@include('includes.form_error')

	
		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
	
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('role_id', 'Role') !!}
			{!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('student_id', 'Id') !!}
			{!! Form::number('student_id', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('is_active', 'Status') !!}
			{!! Form::select('is_active',array('1'=>'Active', '0'=>'Not Active'), null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}


			{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
		
		
			<div class="form-group">
				{!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
			</div>
		{!! Form::close() !!}


		
@endsection