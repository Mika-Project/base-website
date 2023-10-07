{{-- HERO SECTION --}}
<section class="section-style-top"
data-aos="fade-down"
data-aos-delay="150"
data-aos-offset="0"
>
    <div class="container remove-padding">
        <div class="emptyspace"></div>
    </div>
    <div class="container bg-color">
        <div class="row">
            <div class="col">
                <div class="hero-text">
                    <h1><?php echo $heroTitle; ?></h1>
                    <div class="typer"><?php echo $heroText; ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col overflow-hidden remove-padding"
            data-aos="fade-up"
            data-aos-delay="350"
            data-aos-offset="0"
            >
                <div class="hero">
                    <img <?php echo 'src="'.$heroImage.'"' ?> alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
