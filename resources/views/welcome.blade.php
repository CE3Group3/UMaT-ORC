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
    <section class="wrapper">
    <section class="leftCol">
        <div class="cover-photo"><img src="{{URL::to('img/student.png')}}" alt=""/></div>
        <div class="text">Student</div>
        <a href="{{URL::to('student/login')}}" class="button">Proceed</a>
        </section>{{--
    --}}<section class="rightCol">
            <div class="cover-photo"><img src="{{URL::to('img/lecturer1.png')}}" alt=""/></div>
            <div class="text">Lecturer</div>
            <a href="{{URL::to('lecturer/login')}}" class="button">Proceed</a>
        </section>
    </section>
@endsection

