{{-- HERO SECTION (sub-pages) --}}
<header class="hero" style="min-height: 78vh;">
    <span class="orb orb-1"></span>
    <span class="orb orb-2"></span>
    <span class="orb orb-3"></span>

    <div class="hero-inner">
        <div class="hero-badge"><span class="dot"></span> Arch-based &middot; Beginner-friendly</div>
        <h1 class="hero-title"><span data-split><?php echo $heroTitle; ?></span></h1>
        <div class="hero-sub"><?php echo $heroText; ?></div>
    </div>

    @isset($heroImage)
        <div class="hero-visual glass">
            <img src="{{ $heroImage }}" alt="Mika Linux preview">
        </div>
    @endisset
</header>
