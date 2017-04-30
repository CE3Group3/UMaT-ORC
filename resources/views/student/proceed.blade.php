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
    @if(isset($index))
        <div class="message-wrapper">
    <p>Welcome, {{$index}}</p>
    <p>Proceed to view results</p>
        <a href="{{URL::to('student/showresult')}}"> View Results </a>
        </div>
    @else
    <p>You are not logged in</p>

        @endif


@endsection