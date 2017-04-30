@extends('layouts.master')
@section('title' , 'Home')

@section('head')
	<link href="{{URL::To('css/welcome.css')}}" rel='stylesheet' type='text/css'>
@endsection

@section('logout')
	@if(false)
		<a href="{{URL::to('student/logout')}}">Logout</a>
	@endif
@endsection

@section('content')

<form class="form-design" action="{{URL::to('admin/login')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">


	<label for="name">Username</label><br/>
	<input placeholder="Enter username" name="username" type="text"  required><br/>


	<label for="name">Password</label><br/>
	<input placeholder="Enter password" name="pass" type="password"  required><br/>


	<input class="button" type="submit" value="Submit">

</form>
@endsection
