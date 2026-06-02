@php
    $pageTitle = "Mika Linux - Guides";
    $heroTitle = "Guides";
    $heroText = "Find your way around Mika, from first boot to daily use.";
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

    <section class="section" id="guides">
        <div class="shell">
            <div class="glass about-card" data-reveal-group>
                <div class="section-label" data-reveal style="justify-content:center;">Documentation</div>
                <h2 class="section-title" data-reveal>Guides are on the <span class="accent">way</span></h2>
                <p data-reveal>We're still writing these. The plan is to cover installation, the voice assistant, the diagnostic tool, and keeping your system up to date, all in plain language.</p>
                <p data-reveal>Until then, the Discord is your best bet. Ask away and someone will help you get set up.</p>
                <div data-reveal>
                    <a class="btn btn-primary" href="{{ url('https://discord.gg/qknedjfdc8') }}" target="_blank">Join the Discord</a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
