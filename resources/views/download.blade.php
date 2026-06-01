@php
    $pageTitle = "Mika Linux - Download";
    $heroTitle = "Download Mika";
    $heroText = "You're one step away from the beauty of Linux. Grab a release below and we'll take care of the rest.";
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

    <section class="section" id="about-us">
        <div class="shell">
            <div class="glass download-panel" data-reveal-group>
                <div class="section-label" data-reveal>// Releases</div>
                <h2 class="section-title" data-reveal>Choose your <span class="accent">version</span></h2>
                <p data-reveal>Welcome to our download page, you're 1 step further to downloading our OS and enjoying the beauty of Linux. In the table below, you'll be able to find all our releases. (The top one is the most recent.) Please don't download the BETA releases unless you know what you're doing, although the BETA releases are probably stable we don't offer support for it.</p>
                <p data-reveal>So for most users, we recommend the latest version under the tag <strong style="color:var(--cyan)">RELEASE</strong>.</p>

                <div class="table-wrap" data-reveal>
                    <table class="mika-table">
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
    </section>

    @include('components.footer')
</body>
</html>
