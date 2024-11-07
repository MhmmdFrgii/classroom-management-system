<!-- resources/views/layouts/guest.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Login')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="min-vh-100 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('assets/images/bg-pattern-2.png') }}'); background-size: cover;">
        @yield('content')
    </div>
</body>

</html>
