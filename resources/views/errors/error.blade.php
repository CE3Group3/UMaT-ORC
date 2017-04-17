<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error</title>
</head>

<body>

<div class="overlay">

    <header>This website works best in Firefox, Edge and Chrome</header>
    <section class="container">



        <div class="submit">

            <p>{{$errorMessage}}</p>

            <a href="{{url('/')}}"> <input type="submit" name="submit" value="Home"> </a>
        </div>

    </section>

</div>
<footer>
    <p>Krecent 2016 | Carols Live Feeds</p>
</footer>


</body>

</html>