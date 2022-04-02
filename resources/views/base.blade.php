<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Copy Star</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="#">Copy Star</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Авторизация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Регистрация</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-md">
    @yield('content')
</div>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
