<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 | {{ $title }}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <script src="/js/jquery.min.js"></script>
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-4">

        @yield('container')

    </div>


    <script src="/js/bootstrap.bundle.min.js"></script>



</body>

</html>
