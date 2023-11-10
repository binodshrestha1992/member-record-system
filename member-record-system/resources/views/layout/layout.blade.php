<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
</head>

<body>
@include('layout.header')
<div class="content">
@yield('content')
</div>
@include('layout.footer')
<script>

function onClickHamBurger() {
    var hamBurger = document.getElementById('hamBurger');

    var navlist = document.getElementById('navlist');
    if (navlist.style.transform == 'translateX(0%)') {
        navlist.style.transform = 'translateX(-200%)';
    } else {
        navlist.style.transform = 'translateX(0%)';

    }
}
</script>
</body>

</html>