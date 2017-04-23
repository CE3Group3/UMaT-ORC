<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    @if(isset($index))
    <p>Welcome, {{$index}}</p>
    <p>Proceed to view results</p>
        <a href="{{URL::to('showresult')}}"> View Results </a>
    @else
    <p>You are not logged in</p>

        @endif

</body>
</html>