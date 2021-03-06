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

            <h2>{{$errorMessage}}</h2>

            <a href="{{url('/')}}"> <input class="button" type="submit" name="submit" value="Home"> </a>
        </div>

@endsection