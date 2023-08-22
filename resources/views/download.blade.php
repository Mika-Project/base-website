<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="path/to/your/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mika Linux - Downloads</title>
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
                <li><a href="/" class="hover:text-gray-300">Home</a></li>
                <li><a href="/downloads" class="px-4 py-2 bg-gray-700 rounded-full text-white font-semibold hover:bg-gray-600 transition duration-300">Download</a></li>
            </ul>
        </div>
    </nav>

    <section class="bg-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Downloads</h2>
            <p class="text-lg mb-8">Download the latest versions of Mika Linux below. For more details and changelogs, visit our <a href="https://github.com/Mika-Project/base-iso/releases" class="text-blue-400 hover:underline" target="_blank">GitHub repository</a>.</p>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-700 ">Version</th>
                        <th class="py-2 px-4 bg-gray-700 ">Download Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-600">
                        <td class="py-2 px-4">1.0.0</td>
                        <td class="py-2 px-4"><a href="path/to/download-link-1" class="text-blue-400 hover:underline">Download</a></td>
                    </tr>
                    <tr class="bg-gray-700">
                        <td class="py-2 px-4">1.1.0</td>
                        <td class="py-2 px-4"><a href="path/to/download-link-2" class="text-blue-400 hover:underline">Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Mika Linux. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
