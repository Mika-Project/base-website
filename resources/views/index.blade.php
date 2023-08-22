<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mika Linux</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/mikalinuxlogo.png') }}">
</head>
<body class="bg-gray-900 text-white">
<nav class="bg-gray-800 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('images/mikalinuxlogo.png') }}" alt="Mika Linux Logo" class="h-8 w-8 mr-2">
            <h1 class="text-3xl font-bold">Mika Linux</h1>
        </div>
        <ul class="flex space-x-4">
            <li><a href="#about" class="hover:text-gray-300">About</a></li>
            <li><a href="#features" class="hover:text-gray-300">Features</a></li>
            <li><a href="/guides" class="hover:text-gray-300">Guides</a></li>
            <li><a href="/downloads" class="px-4 py-2 bg-gray-700 rounded-full text-white font-semibold hover:bg-gray-600 transition duration-300">Download</a></li>
        </ul>
    </div>
</nav>

<section class="hero-section py-60">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-semibold text-white mb-4">Welcome to Mika Linux</h1>
        <p class="text-lg text-white">Our goal is <span id="typer"></span></p>
    </div>
</section>


<section id="about" class="py-16 text-center">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-4">About Mika-Linux</h2>
        <p class="text-gray-300">
            Welcome to Mika Linux, your gateway to a user-friendly Linux distribution designed to simplify your transition from other operating systems, like Windows, to the world of open-source computing.
        </p>
        <p class="text-gray-300">
            At Mika Linux, we understand that taking the leap from familiar environments can be a daunting task. That's why we've crafted a distribution that strikes a perfect balance between familiarity and the power of Linux.
        </p>
        <p class="text-gray-300">
            Our mission is to provide you with a seamless journey into the open-source ecosystem. With an intuitive interface, intuitive guides, and a range of helpful tools, we're here to make your Linux transition a breeze.
        </p>
        <p class="text-gray-300">
            Whether you're a seasoned Linux enthusiast or someone taking their first steps into this new world, Mika Linux offers a comfortable environment where you can explore the benefits of open-source software without feeling overwhelmed.
        </p>
        <p class="text-gray-300">
            Join us on a journey where the best of both worlds meet - the familiarity you seek, paired with the power and freedom that Linux brings. Discover Mika Linux, your bridge to a new realm of computing.
        </p>
    </div>
</section>

<section id="features" class="bg-gray-800 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-4">Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Mika-Assistant</h3>
                <p class="text-gray-300">Mika assistant is an AI powered voice assistant. It can open websites, watch anime, tell you the time, and a lot more features to come.</p>
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Easy to use</h3>
                <p class="text-gray-300">We're trying our best to make the transition from windows to linux as easy as possible, you can look at our <a href="/guides" target="_blank">guides</a>.</p>
            </div>
        </div>
    </div>
</section>
<section id="social" class="bg-gray-900 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-semibold text-white mb-4">Connect with Us</h2>
        <div class="flex justify-center items-center space-x-4 mb-8">
            <a href="#" class="text-gray-400 hover:text-gray-300" target="_blank" rel="noopener noreferrer">
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.6 6.2c-.3-1.1-1-2-2.1-2.3C19.8 3.6 12 3.6 12 3.6s-7.8 0-9.5.3c-1.1.3-1.9 1.2-2.2 2.3C.2 7.9.2 12 .2 12s0 4.1.3 5.5c.3 1.1 1.1 2 2.2 2.3 1.7.3 9.5.3 9.5.3s7.8 0 9.5-.3c1.1-.3 1.9-1.2 2.1-2.3.3-1.4.3-5.5.3-5.5s0-4.1-.3-5.3zM9.6 15.3V8.7l5.6 3.3-5.6 3.3z"/>
                </svg>
            </a>
            <span class="text-gray-400">@mika-linux</span><br>
            <a href="#" class="text-gray-400 hover:text-gray-300" target="_blank" rel="noopener noreferrer">
                <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.4 6.8c-.7.3-1.3.4-2 .4.7-.4 1.3-1.1 1.6-1.9-.7.4-1.5.7-2.3.8-.7-.8-1.7-1.3-2.8-1.3-2.1 0-3.9 1.8-3.9 3.9 0 .3 0 .6.1.9-3.2-.2-6-1.7-7.9-4.1-.3.5-.4 1-.4 1.6 0 1.1.6 2.1 1.3 2.7-.5 0-1-.1-1.4-.3v.1c0 1.5 1.1 2.7 2.5 3-.3.1-.6.2-1 .2-.2 0-.4 0-.6-.1.4 1.3 1.6 2.2 3 2.2-1.1.9-2.5 1.4-4 1.4-.3 0-.6 0-.9 0 1.4.9 3.1 1.4 4.9 1.4 5.9 0 9.1-4.9 9.1-9.1 0-.2 0-.4 0-.6 .6-.5 1.2-1.1 1.7-1.8z"/>
                </svg>
            </a>
            <span class="text-gray-400">@mika-linux</span>
        </div>
        <div class="max-w-md mx-auto">
            <iframe src="https://discord.com/widget?id=1141693665148928022&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
    </div>
</section>

<footer class="bg-gray-800 py-8">
    <div class="container mx-auto text-center">
        <p class="text-gray-500">&copy; 2023 Mika Linux. All rights reserved.</p>
    </div>
</footer>
</body>
<script>
    let typed = new Typed('#typer', {
        strings: ['to make an easy to use linux distrobution.', 'to create a beginner friendly linux distro.', 'to create a linux distrobution that more advanced users can use.', 'to stay free forever.'],
        typeSpeed: 80,
        backSpeed: 20,
        loop: true
    })
</script>
</html>
