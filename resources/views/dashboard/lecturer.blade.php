<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
 <h1>Please select the course to fill </h1>
 <form method="post" action="{{URL::to('lecturer/fill')}}">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
<select name="course" required>
@foreach($course_codes as $course_code)
    <option value="{{$course_code->course_code}}">{{$course_code->course_code}}</option>
        {{$course_code->course_code}}

@endforeach
</select>

 <input type="submit" value="Proceed">
 </form>

<br/>
<br/>
<br/>
<br/>
<hr/>
<p><a href="{{URL::to('logout ')}}">Logout</a></p>
</body>
</html>