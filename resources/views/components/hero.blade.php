{{-- HERO SECTION (sub-pages) --}}
<header class="hero" style="min-height: 58vh;">
    <div class="hero-inner">
        <h1 class="hero-title"><?php echo $heroTitle; ?></h1>
        <div class="hero-sub"><?php echo $heroText; ?></div>
    </div>

    @isset($heroImage)
        <div class="hero-visual glass">
            <img src="{{ $heroImage }}" alt="Mika Linux preview">
        </div>
    @endisset
</header>
