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
    <h4> {{$name}} - {{$results[0]
    ->index_no}}</h4>

    <table>
        <thead>
        <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Marks</th>
        </tr>
        </thead>


        <tbody>
    @foreach($results as $result)
    <tr>
    <td>{{$result->course_code}}</td>
    <td>{{$result->course_name}}</td>
    <td>{{$result->marks}}</td>
    </tr>
@endforeach

</tbody>
        </table>
<br/>
<br/>
<br/>
<br/>
<hr/>
<p><a href="{{URL::to('student/logout')}}">Logout</a></p>
@endsection