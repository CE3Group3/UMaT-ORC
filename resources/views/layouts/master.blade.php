<!doctype html>

<html>
<head>
    <title>UMaT ORC | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{URL::to('img/favicon.png')}}"/>
    <link href="{{URL::To('css/materialize.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{URL::To('css/index.css')}}" rel='stylesheet' type='text/css'>

    @yield('head')
<body>
    <header>
        <a href="{{URL::to('/')}}"><img src="{{URL::to('img/umat-logo.jpg')}}" alt=""/></a>
        <h1>UMaT - Online Result Checker</h1>
        @yield('logout')
    </header>


<div class="container">
    @yield('content')
</div>

<footer>
    @yield('footer')
</footer>
<script src="{{URL::to('js/jquery.js')}}"></script>
<script src="{{URL::to('js/materialize.min.js')}}"></script>
</body>
</html>
