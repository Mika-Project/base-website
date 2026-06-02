@php
    $pageTitle = "Mika Linux - Download";
    $heroTitle = "Download Mika";
    $heroText = "Pick a release from the list below and you're good to go.";
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
                <div class="section-label" data-reveal>Releases</div>
                <h2 class="section-title" data-reveal>Choose your <span class="accent">version</span></h2>
                <p data-reveal>Everything we've released is in the table below, newest at the top. If you just want something that works, grab the latest one tagged <strong style="color:var(--pink-soft)">RELEASE</strong>.</p>
                <p data-reveal>The <strong>BETA</strong> builds are usually fine, but they're for people who don't mind the occasional rough edge, and we can't really offer support for them. Your call.</p>

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
