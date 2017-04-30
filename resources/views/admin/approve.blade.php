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

    <form action="{{URL::to('admin/approve/results')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @if($classList->count())
            @foreach($classList as $result)
                <div class="student-marks input-field">
                    <label>{{$result->index_no}}</label>
                    <input required type="text" name="marks[]" value="{{$result->marks}}"/>
                    <input type="hidden" name="indexNo[]" value="{{$result->index_no}}" />
                </div>


            @endforeach
            <div id="submit"> <input class="button" type="submit" value="Approve"></div>

    </form>
    {{--@include('pagination.custom' , ['paginator' => $classList])--}}
    @else
        <div class="message-wrapper">

            <h2>This course has not been filled</h2>
            <a class="button" href="{{URL::to('admin/dashboard')}}">Proceed</a>
            <a class="button" href="{{URL::to('lecturer/logout')}}">Exit</a>
        </div>
    @endif
    <br>

    {{--<p>{{$classList}}</p>--}}
@endsection