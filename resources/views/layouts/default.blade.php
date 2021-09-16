<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

        <title>Tes Qwords</title>
    </head>
    <body>
        {{-- Navbar --}}
        @include('includes.navbar')
        
        {{-- Dashboard Content --}}
        @yield('content')
        
        {{-- Footer --}}
        @include('includes.footer')

        
    </body>
</html>