@extends('layouts.app')

@section('content')
<main class="w-full bg-white text-gray-800 py-16">

    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h1>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Our approachable team is happy to receive enquiries for potential projects.
                Feel free to contact us using the form below or reach us directly.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            
            {{-- LEFT CONTACT INFORMATION --}}
            <div class="space-y-5 text-gray-700">
                <p class="flex items-center gap-3">
                    <span class="text-xl">📞</span> +91 9769398104
                </p>
                <!-- <p class="flex items-center gap-3">
                    <span class="text-xl">📱</span> +91 9998887776
                </p> -->
                <p class="flex items-center gap-3">
                    <span class="text-xl">✉️</span> mumbai@ogeeconcern.in
                </p>
                <p class="flex items-center gap-3">
                    <span class="text-xl">📍</span> Shop 1 & 2, Kinara CHS,Mhatrewadi, Dahisar West,Mumbai 400068
                </p>

                <div class="flex space-x-4 text-2xl mt-6">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            {{-- RIGHT FORM --}}
            <form action="{{ url('/submit-contact') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-semibold">Name *</label>
                    <input type="text" name="name" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Email *</label>
                    <input type="email" name="email" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Contact Number *</label>
                    <input type="text" name="phone" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Subject *</label>
                    <input type="text" name="subject" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Message *</label>
                    <textarea name="message" rows="5" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                </div>

                <button type="submit"
                    class="mt-4 px-10 py-3 border border-gray-500 rounded-full hover:bg-gray-200 transition text-gray-700 text-lg font-semibold">
                    Submit
                </button>
            </form>
        </div>
    </div>

    {{-- MAP --}}
    <div class="w-full">
        <!-- <iframe
            class="w-full h-72 md:h-96 border-none"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!...your map link..."
            allowfullscreen="" loading="lazy">
        </iframe> -->
    </div>
</main>
@endsection
