@extends('layouts.master')
@section('title' , 'Login')

@section('head')
	<link href="{{URL::To('css/welcome.css')}}" rel='stylesheet' type='text/css'>
@endsection

@section('logout')
	@if(false)
		<a href="{{URL::to('student/logout')}}">Logout</a>
	@endif
@endsection

@section('content')
<form class="form-design" action="{{URL::to('lecturer/login')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="input-field">

	<input name="username" type="text"  required>
	<label for="name">Username</label><br/>
	</div>

		<div class="input-field">
			<input name="pass" type="password"  required><br/>
			<label for="name">Password</label><br/>
		</div>


	<input class="button" type="submit" value="Submit">

</form>

@endsection
