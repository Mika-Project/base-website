@php
    $pageTitle = "Mika Linux - Home";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.headtags')
    <meta name="title" content="Mika Linux" />
    <meta name="description" content="Welcome to mika linux! We're an arch based linux distro, and we're trying to help the average user to switch towards linux. We offer multiple tools and features to make this process easier." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mika-linux.com" />
    <meta property="og:title" content="Mika Linux" />
    <meta property="og:description" content="Welcome to mika linux! We're an arch based linux distro, and we're trying to help the average user to switch towards linux. We offer multiple tools and features to make this process easier." />
    <meta property="og:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
    <meta name="theme-color" content="#F34B6C">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mika-linux.com" />
    <meta property="twitter:title" content="Mika Linux" />
    <meta property="twitter:description" content="Welcome to mika linux! We're an arch based linux distro, and we're trying to help the average user to switch towards linux. We offer multiple tools and features to make this process easier." />
    <meta property="twitter:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
</head>
<body>
    {{-- NAV BAR --}}
    @include('components.nav')

    {{-- HERO --}}
    <header class="hero">
        <div class="hero-inner">
            <h1 class="hero-title">Mika <span class="accent">Linux</span></h1>
            <div class="hero-sub">We're trying <span id="typer"></span></div>
            <div class="hero-cta">
                <a class="btn btn-primary" href="{{ url('/downloads') }}">
                    Download
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12"/><path d="m7 12 5 5 5-5"/><path d="M5 21h14"/></svg>
                </a>
                <a class="btn btn-ghost" href="#features">See what it does</a>
            </div>
        </div>
    </header>

    {{-- ABOUT US --}}
    <section class="section" id="about-us">
        <div class="shell">
            <div class="glass about-card" data-reveal-group>
                <h2 class="section-title" data-reveal>What is Mika?</h2>
                <p data-reveal>Mika Linux is an Arch-based distro for people coming from Windows or macOS who've been meaning to give Linux a try but didn't want to fight with it to get there. We try to keep it friendly and sensible out of the box, without getting in the way of folks who already know what they're doing.</p>
                <p data-reveal>It's a small project and very much a work in progress, but we'd love for you to try it. Grab a copy below.</p>
                <div data-reveal>
                    <a class="btn btn-primary" href="{{ url('/downloads') }}">
                        Download
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12"/><path d="m7 12 5 5 5-5"/><path d="M5 21h14"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SHOWCASE --}}
    <section class="section" style="padding-top:0;">
        <div class="shell">
            <div class="hero-visual glass" data-reveal style="margin:0 auto;">
                <img src="{{ asset('images/banner.png') }}" alt="Mika Linux desktop">
            </div>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="section" id="features">
        <div class="shell">
            <div class="section-head" data-reveal-group>
                <h2 class="section-title" data-reveal>What's <span class="accent">in it</span></h2>
                <p class="section-intro" data-reveal>A few things we've built into Mika to make day-to-day Linux a bit less of a hassle.</p>
            </div>

            <div class="feature-grid" data-reveal-group>
                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><path d="M12 19v3"/></svg>
                    </div>
                    <h4>Voice assistant</h4>
                    <p>A built-in voice assistant (it uses ChatGPT under the hood) you can ask questions or get a hand with whatever you're doing.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2 5 4-12 2 7h6"/></svg>
                    </div>
                    <h4>Diagnostic tool</h4>
                    <p>When something's acting up, the diagnostic tool runs a few checks on your hardware and software and tells you what's probably wrong, plus what to try next.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-3-6.7L21 8"/><path d="M21 3v5h-5"/></svg>
                    </div>
                    <h4>Updates without the terminal</h4>
                    <p>Update everything from one window. It shows you what's about to change before it does anything, so a rolling Arch base doesn't have to be scary.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 21h8"/><path d="m9 11 3 3 3-3"/><path d="M12 6v8"/></svg>
                    </div>
                    <h4>An installer that holds your hand</h4>
                    <p>A graphical installer that walks you from USB stick to desktop. Pick a disk, make your user, and it handles the rest. No partitioning knowledge required.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR TEAM --}}
    <section class="section" id="our-team">
        <div class="shell">
            <div class="section-head" data-reveal-group>
                <h2 class="section-title" data-reveal>The people behind it</h2>
                <p class="section-intro" data-reveal>A small bunch of us who work on Mika in our spare time. Say hi sometime.</p>
            </div>

            <div class="team-grid" data-reveal-group>
                <div class="team-card glass" data-reveal>
                    <a href="https://luciousdev.nl" target="_blank">
                        <div class="team-avatar"><img src="{{ asset('images/lucypicture.jpg') }}" alt="Lucy"></div>
                    </a>
                    <h5>Lucy</h5>
                    <div class="role">Founder / Development lead</div>
                </div>
                <div class="team-card glass" data-reveal>
                    <a href="https://github.com/U-L-M-S" target="_blank">
                        <div class="team-avatar"><img src="{{ asset('images/torva.png') }}" alt="Torva"></div>
                    </a>
                    <h5>Torva</h5>
                    <div class="role">OS / Backend development</div>
                </div>
                <div class="team-card glass" data-reveal>
                    <a href="https://github.com/JaKooLit" target="_blank">
                        <div class="team-avatar"><img src="{{ asset('images/jay.jpeg') }}" alt="Jay"></div>
                    </a>
                    <h5>Jay</h5>
                    <div class="role">OS / Backend development</div>
                </div>
                <div class="team-card glass" data-reveal>
                    <a href="https://tecnoblast.github.io" target="_blank">
                        <div class="team-avatar"><img src="{{ asset('images/tcbl.png') }}" alt="TecnoBlast"></div>
                    </a>
                    <h5>TecnoBlast</h5>
                    <div class="role">Backend development</div>
                </div>
                <div class="team-card glass" data-reveal>
                    <a href="https://github.com/Jarno556564" target="_blank">
                        <div class="team-avatar"><img src="{{ asset('images/jarno.png') }}" alt="Jarno"></div>
                    </a>
                    <h5>Jarno</h5>
                    <div class="role">Web developer</div>
                </div>
            </div>
        </div>
    </section>

    {{-- JOIN US --}}
    <section class="section" id="join-us">
        <div class="shell">
            <div class="glass join-grid" data-reveal-group>
                <div>
                    <h2 class="section-title" data-reveal>Come say hi</h2>
                    <p data-reveal>Most of us hang out on Discord. It's the best place to ask questions, get unstuck, or just follow along while we build things. Don't be shy about jumping in.</p>
                    <p data-reveal>We're also on <a href="{{ url('https://twitter.com/MikaLinux') }}" target="_blank">Twitter</a>, and all the code lives on <a href="{{ url('https://github.com/Mika-Project') }}" target="_blank">GitHub</a>. If you'd rather email, reach us at <a href="mailto:mikalinux@luciousdev.nl">mikalinux@luciousdev.nl</a>.</p>
                </div>
                <div class="discord-wrap" data-reveal>
                    <iframe class="discord-iframe" title="discord iframe" src="https://discord.com/widget?id=1141693665148928022&theme=dark" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
