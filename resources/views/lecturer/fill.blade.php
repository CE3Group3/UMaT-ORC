@extends('layouts.submaster')
@section('title' , 'Home')

@section('head')
    <link href="{{URL::to('css/welcome.css')}}" rel='stylesheet' type='text/css'>

@endsection

@section('logout')
    @if(false)
        <a href="{{URL::to('student/logout')}}">Logout</a>
    @endif
@endsection

@section('content')

    <form action="{{URL::to('fillresults')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

 @if($classList->count())
    @foreach($classList as $result)
        <div class="student-marks input-field">
            <label>{{$result->index_no}}</label>
            <input type="text" name="marks[]"/>
            <input type="hidden" name="indexNo[]" value="{{$result->index_no}}" />
        </div>


    @endforeach
        <div id="submit"> <input class="button" type="submit" value="Submit"></div>

    </form>
     {{--@include('pagination.custom' , ['paginator' => $classList])--}}
     @else
            <div class="message-wrapper">

                <h2>Sorry your class list is not available</h2>
                <a class="button" href="{{URL::to('lecturer/dashboard')}}">Proceed</a>
                <a class="button" href="{{URL::to('lecturer/logout')}}">Exit</a>
             </div>
  @endif
        <br>

{{--<p>{{$classList}}</p>--}}
@endsection