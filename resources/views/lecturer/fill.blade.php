<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
<form action="{{URL::to('fillresults')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($classList as $result)
        <label>{{$result->index_no}}</label>
        <input type="text" name="marks[]"/>
        <input type="hidden" name="indexNo[]" value="{{$result->index_no}}" />
        <br/>
        <br/>

@endforeach
    <input type="submit" value="Submit">
</form>
{{--<p>{{$classList}}</p>--}}
</body>
</html>