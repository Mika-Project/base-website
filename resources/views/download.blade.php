@php
    $pageTitle = "Mika Linux - Download";
    $heroTitle = "Mika Linux - Download";
    $heroText = "On this page you'll be able to find releases of our OS.";
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

    <section class="about-us" id="about-us">
        <div class="container background section-margin-top section-margin-bottom">
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
                    <p class="text-center">Welcome to our download page, you're 1 step further to downloading our OS and enjoying the beauty of Linux. In the table below, you'll be able to find all our releases. (The top one is the most recent.) Please don't download the BETA releases unless you know what you're doing, although the BETA releases are probably stable we don't offer support for it.<br><br>So for most users, we recommend the latest version under the tag "RELEASE"</p>
                </div>
            </div>
            <div class="row"
                data-aos="fade-up"
                data-aos-delay="450"
                data-aos-offset="0"
            >
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Codename</th>
                                    <th>Version</th>
                                    <th>Tag</th>
                                    <th>Release Notes</th>
                                    <th>Download</th>
                                    <th>Release Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($releases as $release)
                                    <tr>
                                        <td><?php echo $release->codename ?></td>
                                        <td><?php echo $release->version ?></td>
                                        <td><?php echo $release->tag ?></td>
                                        <td><a <?php echo "href='".$release->releasenotes."'" ?> target="_blank">Release Notes</a></td>
                                        <td><a <?php echo "href='".$release->isoname."'"?> >Download</a></td>
                                        <td><?php echo $release->date ?></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('components.footer')
</body>
</html>
