<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @include('layouts.inc.ext-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
</head>

<body>
    <div class="jumbotron text-center bg-white home">
        <a href="petugas/login">
            <img src="{{ url('image/icont.png')}}" width="300" alt="">
        </a>
        
        <div class="container jarak"><h3>Hallo Selamat Datang <br> Di Aplikasi Inventaris</h3></div>
        
    </div>

@include('layouts.inc.ext-js')
</body>
</html>