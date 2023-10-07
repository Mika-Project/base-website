@php
    $pageTitle = "Mika Linux - Guides";
    $heroTitle = "Mika Linux - Guides";
    $heroText = "On this page you'll be able to read guides on how to use the OS.";
    $heroImage = asset('images/banner.png');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.headtags')
    <link rel="stylesheet" href="{{ asset('css/downloads.css') }}">
</head>
<body>
    @include('components.nav')
    @include('components.hero')

    @include('components.footer')
</body>
</html>
