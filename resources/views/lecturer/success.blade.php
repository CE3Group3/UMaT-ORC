@extends('layouts.master')
@section('title' , 'Home')

@section('head')
    <link href="{{URL::To('css/welcome.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{URL::To('css/lecturer.css')}}" rel='stylesheet' type='text/css'>
@endsection

@section('logout')
    @if(false)
        <a href="{{URL::to('student/logout')}}">Logout</a>
    @endif
@endsection

@section('content')

    <div class="message-wrapper">
    <h2>You've filled {{$course_code}} successfully</h2>

<a class="button" href="{{URL::to('lecturer/dashboard')}}">Proceed</a>
<a class="button" href="{{URL::to('lecturer/logout')}}">Exit</a>

    </div>

@endsection