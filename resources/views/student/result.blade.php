<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
@foreach($results as $result)
    <p>{{$result->course_code}}</p>
    <p>{{$result->marks}}</p>
@endforeach


<br/>
<br/>
<br/>
<br/>
<hr/>
<p><a href="{{URL::to('logout ')}}">Logout</a></p>
</body>
</html>