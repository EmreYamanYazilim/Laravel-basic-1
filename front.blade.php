<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')  }}">

    @yield('css')

    <title>@yield('title')</title>




</head>
<body>

@include('front.menu')
<br>
<br>
<div class="content min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-8">
                @yield('metin')
            </div>
            <div class="col-4">
                @include('front.kategori')

            </div>




        </div>
    </div>
</div>

<footer>
    <div class="container-fluid bg-dark text-center min">z</div>
</footer>

<script src="{{ asset('assets/js/bootstrap.js')  }}"></script>
<script src=" {{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.js')  }}"></script>


</body>
</html>
