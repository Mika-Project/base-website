@php
    $pageTitle = "Mika Linux - Home";
    $heroTitle = "Mika Linux";
    $heroText = "We are trying <span id='typer'></span>";
    $heroImage = asset('images/banner.png');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.headtags')
    {{-- <script>
        alert('The images on the website are not how they will be in the final release. Its still very much in beta');
    </script> --}}
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
    @include('components.hero')

    {{-- ABOUT US --}}
    <section class="about-us" id="about-us" style="overflow-x:hidden; overflow-y:hidden;">
        <div class="container background2 section-margin-top section-margin-bottom">
            <div class="row"
            data-aos="fade-up"
            data-aos-delay="150"
            data-aos-offset="0"
            >
                <div class="col">
                    <h1 class="text-center">About <span style="color: #F34B6C;">us</span></h1>
                </div>
            </div>
            <div class="row"
            data-aos="fade-up"
            data-aos-delay="250"
            data-aos-offset="0"
            >
                <div class="col">
                    <p class="text-center">Mika Linux is one of the many Arch based distrobutions. We're trying to help you switch from windows/mac to linux. We're aware of some of the limitations of linux, but these days it's stable enough that most people could actually switch. So our goal is to help everyone make the switch in the most user friendly possible way as possible.<br><br>To get started click the download button.</p>
                </div>
            </div>
            <div class="row"
            data-aos="fade-up"
            data-aos-delay="300"
            data-aos-offset="0"
            >
                <div class="col d-flex justify-content-center">
                    <form action="{{ url('/downloads') }}">
                        <button type="submit" class="button">
                            <span class="button__text">Download</span>
                            <span class="button__icon"><svg class="svg" data-name="Layer 2" id="bdd05811-e15d-428c-bb53-8661459f9307" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><path d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z"></path><path d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z"></path><path d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z"></path></svg></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section style="overflow-x:hidden;">
        <div class="container background section-margin-bottom" id="features">
            <div class="row space-between-header-sections" data-aos="fade-up" data-aos-delay="150" data-aos-offset="0">
                <div class="col">
                    <h1 class="text-center">OS <span style="color: #F34B6C;">features</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 ai-features-section" data-aos="fade-right" data-aos-delay="250" data-aos-offset="0">
                    <h4 class="text-center" id="ai-features">AI Voice Assistant</h4>
                    <p class="text-center ai-features-section-p">With our OS, we are offering an AI voice assistant, powered by ChatGPT, to help you with your daily tasks.</p>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="250" data-aos-offset="0">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row" style="margin-top: 3rem;">
                <div class="col-12 col-md-6 diagtool-features-section" data-aos="fade-left" data-aos-delay="250" data-aos-offset="0">
                    <h4 class="text-center">Diagnostic Tool</h4>
                    <p class="text-center diagtool-features-section" style="padding-top: 4rem;">Our diagnostic tool can help you diagnose issues with your PC, both hardware and software-related. It will test your PC and provide recommendations about the results later on. It is also very useful when someone else is going to diagnose your computer.</p>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-right" data-aos-delay="250" data-aos-offset="0">
                    <img src="{{ asset('images/diagtool.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- OUR TEAM --}}
    <section style="overflow-x:hidden;">
        <div class="container background2 section-margin-bottom" id="our-team">
            <div class="row space-between-header-sections"
            data-aos="fade-up"
            data-aos-delay="150"
            data-aos-offset="0"
            >
                <div class="col">
                    <h1 class="text-center">Our <span style="color: #F34B6C;">team</span></h1>
                </div>
            </div>
            <div class="scroll-block"
            data-aos="fade-left"
            data-aos-delay="350"
            data-aos-offset="0"
            >
                <div class="card" style="width: 18rem;">
                    <a href="https://luciousdev.nl" target="_blank">
                        <img class="card-img-top" src="{{ asset('images/lucypicture.jpg') }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Lucy</h5>
                        <p style="color:#6b6b6b;" class="card-text">Role: Founder/Development lead</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="https://github.com/U-L-M-S" target="_blank">
                        <img class="card-img-top" src="{{ asset('images/torva.png') }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Torva</h5>
                        <p style="color:#6b6b6b;" class="card-text">Role: OS/Backend development</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="https://github.com/JaKooLit" target="_blank">
                        <img class="card-img-top" src="{{ asset('images/jay.jpeg') }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Jay</h5>
                        <p style="color:#6b6b6b;" class="card-text">Role: OS/Backend development</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="https://tecnoblast.github.io">
                        <img class="card-img-top" src="{{ asset('images/tcbl.png') }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">TecnoBlast</h5>
                        <p style="color:#6b6b6b;" class="card-text">Role: Backend development</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="https://github.com/Jarno556564" target="_blank">
                        <img class="card-img-top" src="{{ asset('images/jarno.png') }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Jarno</h5>
                        <p style="color:#6b6b6b;" class="card-text">Role: Web developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Join Us --}}
    <section style="overflow-x:hidden;">
        <div class="container background section-margin-bottom" id="features">
            <div class="row" style="padding-top: 15px;">
                <div class="col"
                data-aos="fade-up"
                data-aos-delay="150"
                data-aos-offset="0"
                >
                    <h1 class="text-center">Join <span style="color: #F34B6C;">us</span></h1>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="250" data-aos-offset="0">
                    <p class="text-center text-joinus-section">Join us on social media! We're building an amazing community over on our discord, to hang out and to help you out with any issues you may have.<br><br>We also have other socials like our <a href="{{ url('https://twitter.com/MikaLinux') }}" target="_blank">Twitter</a>. And you're able to find all of our source code on our <a href="{{ url('https://github.com/Mika-Project') }}" target="_blank">Github</a>.<br>For email contact you can send us a message at <a href="mailto:mikalinux@luciousdev.nl">mikalinux@luciousdev.nl</a></p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="250" data-aos-offset="0">
                    <iframe class="discord-iframe" title="discord iframe" src="https://discord.com/widget?id=1141693665148928022&theme=dark" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    {{-- SCRIPTS --}}
    <script>
        let typed = new Typed('#typer', {
            strings: ['to make an easy to use Linux distribution.', 'to create a beginner friendly Linux distro.', 'to create a Linux distribution that more advanced users can use.', 'to stay free forever.'],
            typeSpeed: 80,
            backSpeed: 20,
            loop: true
        });
    </script>
</body>
</html>
