<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <title></title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Preloader -->


@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')


@php
    // Configuration from your .env file
    $whatsappNumber = config('app.whatsapp_number', '919876543210'); // Default if not set
    $defaultMessage = urlencode("Hello OGEE-CONCERN LLP, I'm interested in a consultation for a project.");
@endphp

<a href="https://wa.me/{{ $whatsappNumber }}?text={{ $defaultMessage }}" 
   target="_blank" 
   class="fixed bottom-6 right-6 z-50 transition duration-300"
   title="Chat with us on WhatsApp"
>
    <div class="bg-white p-2 rounded-xl shadow-2xl hover:scale-105 transform">
        
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp Chat" class="w-12 h-12">
        
        </div>
</a>
</body>
</html>
