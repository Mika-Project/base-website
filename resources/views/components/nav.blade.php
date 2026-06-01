{{-- NAV BAR --}}
<nav class="site-nav">
    <div class="shell nav-inner">
        <a class="nav-brand" href="/">
            <img alt="Mika Linux logo" src="{{ asset('images/mikalinuxlogowhite.png') }}">
            <span>Mika Linux</span>
        </a>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="{{ url('/downloads') }}">Download</a></li>
            <li><a href="{{ url('/guides') }}">Guides</a></li>
            <li><a class="nav-cta" href="{{ url('https://github.com/Mika-Project') }}" target="_blank">GitHub</a></li>
        </ul>
    </div>
</nav>
