<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    @yield('css')

</head>

<body>
    <nav>
        <div class="logo"></div>
        <div class="nav-btn-group">
            <a href="{{ asset('/news') }}" class="nav-btn">news</a>
            <a href="{{ asset('/product') }}" class="nav-btn">product</a>
            <a href="{{ asset('/contactus') }}" class="nav-btn">contactus</a>
        </div>
    </nav>

    @if (Session::has('messenge'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('messenge') }}
        </div>
    @endif


    @yield('content')



    {{-- bootstrap js --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script src="/js/js.js"></script>

</body>

</html>
