<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>RefugeConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>