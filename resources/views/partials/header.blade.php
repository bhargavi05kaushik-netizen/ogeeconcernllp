<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuBtn = document.getElementById("menuBtn");
            const closeBtn = document.getElementById("closeBtn");
            const mobileMenu = document.getElementById("mobileMenu");

                menuBtn.addEventListener("click", () => {
                 mobileMenu.classList.remove("hidden");
                mobileMenu.classList.remove("-translate-x-full");
                 mobileMenu.classList.add("translate-x-0");
                     });

          closeBtn.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
    setTimeout(() => {
        mobileMenu.classList.add("hidden");
    }, 300);
});
        });
    </script>
</head>

<body class="bg-gray-100">

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-16">
            
            <!-- LOGO -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/ogeelogo.png') }}" class="h-40 w-auto" alt="Logo">
                </a>
            </div>

            <!-- DESKTOP MENU -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('index') }}" class="text-gray-600 hover:text-green-700 font-medium">Home</a>
                <a href="{{ route('service') }}" class="text-gray-600 hover:text-green-700 font-medium">Service</a>
                <a href="{{ route('project') }}" class="text-gray-600 hover:text-green-700 font-medium">Project</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-green-700 font-medium">About Us</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-green-700 font-medium">Contact Us</a>
                <a href="{{ route('quotes') }}" class="text-white px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-400">Get A Quote</a>
            </nav>

            <!-- MOBILE MENU BUTTON -->
            <button id="menuBtn" class="md:hidden text-3xl text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>
    </div>

    <!-- SLIDE MENU -->
  <div id="mobileMenu"
    class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg transform -translate-x-full transition-all duration-300 z-50 hidden md:hidden">
    
    <button id="closeBtn"
        class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 hover:bg-red-500 text-gray-700 hover:text-white transition-all duration-300 shadow-md">
        ✕
    </button>

    <nav class="px-6 space-y-4 mt-4">
        <a href="{{ route('index') }}" class="block text-gray-700 text-lg">Home</a>
        <a href="{{ route('service') }}" class="block text-gray-700 text-lg">Service</a>
        <a href="{{ route('about') }}" class="block text-gray-700 text-lg">Project</a>
        <a href="{{ route('about') }}" class="block text-gray-700 text-lg">About Us</a>
        <a href="{{ route('contact') }}" class="block text-gray-700 text-lg">Contact Us</a>
        <a href="{{ route('quotes') }}" class="block text-white bg-gray-400 text-center py-2 rounded-lg">Get A Quote</a>
    </nav>
</div>

</header>

</body>
</html>
