<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('images/mikalinuxlogo.png') }}">
    <title>Mika Linux</title>
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
                <li><a href="/downloads" class="px-4 py-2 bg-gray-700 rounded-full text-white font-semibold hover:bg-gray-600 transition duration-300">Download</a></li>
            </ul>
        </div>
    </nav>

    <section class="mt-16">
        <div class="container mx-auto">
            <div class="relative">
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-5xl font-semibold text-white">Mika Linux</h2>
                </div>
                <img src="IMAGE" alt="Mika Linux Slideshow" class="w-full h-auto">
            </div>
        </div>
    </section>

    <section id="about" class="bg-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">About Mika Linux</h2>
            <p class="text-lg">DESCRIPTION</p>
        </div>
    </section>

    <section id="features" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Features</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <li class="p-6 bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Feature 1</h3>
                    <p>Details about feature 1.</p>
                </li>
                <li class="p-6 bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Feature 2</h3>
                    <p>Details about feature 2.</p>
                </li>
                <li class="p-6 bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Feature 3</h3>
                    <p>Details about feature 3.</p>
                </li>
            </ul>
        </div>
    </section>

    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Mika Linux. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
