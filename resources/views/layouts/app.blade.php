<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronurse</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplemde@1.11.2/dist/simplemde.min.css">
    <link rel="stylesheet" href="{{asset('site/assets/styles.css')}}">
    @yield('css')
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Pronurse</h1>
        </div>
    </header>

    <!-- Main Form Container -->
    <div class="container mx-auto p-8">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Pronurse. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript Section -->
    <script src="https://cdn.jsdelivr.net/npm/simplemde@1.11.2/dist/simplemde.min.js"></script>
    <script src="{{asset('site/assets/simple-mde.js')}}"></script>

    @yield('js')
</body> 
</html>
