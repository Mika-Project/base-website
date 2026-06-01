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

    {{-- HERO — the welcome --}}
    <header class="hero">
        <span class="orb orb-1"></span>
        <span class="orb orb-2"></span>
        <span class="orb orb-3"></span>

        <div class="hero-inner">
            <div class="hero-badge"><span class="dot"></span> Arch-based &middot; Built for newcomers</div>
            <h1 class="hero-title">
                <span data-split>Mika</span> <span class="gradient-text" data-split>Linux</span>
            </h1>
            <div class="hero-sub">We are trying <span id="typer"></span></div>
            <div class="hero-cta">
                <a class="btn btn-primary" href="{{ url('/downloads') }}">
                    Download
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12"/><path d="m7 12 5 5 5-5"/><path d="M5 21h14"/></svg>
                </a>
                <a class="btn btn-ghost" href="#features">Explore features</a>
            </div>
        </div>

        <div class="scroll-cue">
            <span>Scroll</span>
            <span class="mouse"></span>
        </div>
    </header>

    {{-- ABOUT US --}}
    <section class="section" id="about-us">
        <div class="shell">
            <div class="glass about-card" data-reveal-group>
                <div class="section-label" data-reveal style="justify-content:center;">// 01 &mdash; About us</div>
                <h2 class="section-title" data-reveal>About <span class="accent">us</span></h2>
                <p data-reveal>Mika Linux is an Arch-based GNU/Linux distribution targeting beginners who are looking to migrate from their existing Windows or macOS installations. Our distribution aims to be as beginner-friendly as possible while providing capable features in a maintained and polished GNU/Linux environment.</p>
                <p data-reveal>To get started, click the download button below.</p>
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
                <div class="section-label" data-reveal>// 02 &mdash; What's inside</div>
                <h2 class="section-title" data-reveal>OS <span class="accent">features</span></h2>
                <p class="section-intro" data-reveal>Thoughtful tools that take the friction out of everyday Linux — so you can spend less time fixing things and more time using your computer.</p>
            </div>

            <div class="feature-grid" data-reveal-group>
                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><path d="M12 19v3"/></svg>
                    </div>
                    <h4>AI Voice Assistant</h4>
                    <p>Our distribution offers a ChatGPT-powered AI voice assistant to help you with your daily tasks.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2 5 4-12 2 7h6"/></svg>
                    </div>
                    <h4>Diagnostic Tool</h4>
                    <p>In the event of hardware or software issues, our diagnostic tool is made with the goal of helping you diagnose and troubleshoot them. It is capable of testing your computer and providing recommendations accordingly.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-3-6.7L21 8"/><path d="M21 3v5h-5"/></svg>
                    </div>
                    <h4>One-click Updates</h4>
                    <p>A friendly system updater keeps everything current without touching the terminal — it tells you plainly what changed and keeps your rolling Arch base healthy.</p>
                </div>

                <div class="feature-card glass" data-reveal>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 21h8"/><path d="m9 11 3 3 3-3"/><path d="M12 6v8"/></svg>
                    </div>
                    <h4>Effortless Install</h4>
                    <p>A guided graphical installer gets you from USB stick to desktop in minutes. Pick a disk, create your user, and Mika handles the rest — no partitioning expertise required.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR TEAM --}}
    <section class="section" id="our-team">
        <div class="shell">
            <div class="section-head" data-reveal-group>
                <div class="section-label" data-reveal>// 03 &mdash; The people</div>
                <h2 class="section-title" data-reveal>Our <span class="accent">team</span></h2>
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
                    <div class="section-label" data-reveal>// 04 &mdash; Community</div>
                    <h2 class="section-title" data-reveal>Join <span class="accent">us</span></h2>
                    <p data-reveal>Join us on social media! We're building an amazing community over on our Discord, feel free to join us there to hang out and ask us for help with any issues you may have.</p>
                    <p data-reveal>You can also find us over at <a href="{{ url('https://twitter.com/MikaLinux') }}" target="_blank">Twitter</a>. The source code of Mika Linux is available on the project's <a href="{{ url('https://github.com/Mika-Project') }}" target="_blank">GitHub</a>. For email contact you can send us a message at <a href="mailto:mikalinux@luciousdev.nl">mikalinux@luciousdev.nl</a>.</p>
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
