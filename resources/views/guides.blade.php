@php
    $pageTitle = "Mika Linux - Guides";
    $heroTitle = "Guides";
    $heroText = "Learn your way around Mika — from first boot to daily driving.";
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
                <div class="section-label" data-reveal style="justify-content:center;">// Documentation</div>
                <h2 class="section-title" data-reveal>Guides are on the <span class="accent">way</span></h2>
                <p data-reveal>We're putting together clear, beginner-friendly walkthroughs covering installation, the AI voice assistant, the diagnostic tool and keeping your system updated.</p>
                <p data-reveal>In the meantime, hop into our community &mdash; we're happy to help you get started.</p>
                <div data-reveal>
                    <a class="btn btn-primary" href="{{ url('https://discord.gg/qknedjfdc8') }}" target="_blank">Join the Discord</a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
