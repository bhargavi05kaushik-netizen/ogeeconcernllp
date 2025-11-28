@extends('layouts.app')

@section('content')
 <main class="w-full bg-white text-gray-800 py-16">

    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                Request A Quote
            </h1>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Ready to bring your dream space to life? Fill out the quotation request below and let the transformation begin.
            </p>
        </div>

        <form action="{{ url('/submit-quote') }}" method="POST" class="space-y-8">
            @csrf

            {{-- Row 1 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold">Your Name *</label>
                    <input type="text" name="name" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Your Email *</label>
                    <input type="email" name="email" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold">Contact Number *</label>
                    <input type="text" name="phone" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold">Project / Property Name *</label>
                    <input type="text" name="project_name" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>

            {{-- Row 3 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold">Location *</label>
                    <input type="text" name="location" required
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold">Property Built Up (Sq. Ft)</label>
                    <input type="text" name="built_up"
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>

            {{-- DropDown --}}
            <div>
                <label class="block text-sm font-semibold">Property Type *</label>
                <select name="property_type" required
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
                    <option value="">Select Property Type</option>
                    <option>Commercial Space</option>
                    <option>Residential Property</option>
                    <option>Office</option>
                    <option>Factory</option>
                </select>
            </div>

            {{-- Checkboxes --}}
            <div>
                <label class="block text-sm font-semibold mb-2">Select</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-2">
                    <label><input type="checkbox" name="services[]" value="Design & Renovation"> Design & Renovation Service</label>
                    <label><input type="checkbox" name="services[]" value="Makeover"> Makeover Service</label>
                    <label><input type="checkbox" name="services[]" value="Electrical"> Electrical Fixtures & Fittings</label>
                    <label><input type="checkbox" name="services[]" value="Built-In Cabinetry"> Built-In Cabinetry</label>
                    <label><input type="checkbox" name="services[]" value="Furnishing"> Furnishing</label>
                    <label><input type="checkbox" name="services[]" value="Curtain & Blind"> Curtain & Blind</label>
                    <label><input type="checkbox" name="services[]" value="Wallpaper"> Wallpaper</label>
                    <label><input type="checkbox" name="services[]" value="3D Drawing"> 3D Interior Perspective Drawing</label>
                    <label><input type="checkbox" name="services[]" value="ID Conceptualization"> ID Conceptualization Services</label>
                    <label><input type="checkbox" name="services[]" value="Others"> Others</label>
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-sm font-semibold mb-2">Additional Project Description</label>
                <textarea name="description" rows="6"
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button type="submit"
                    class="px-10 py-3 border border-gray-500 rounded-full hover:bg-gray-200 transition text-gray-700 text-lg font-semibold">
                    Send
                </button>
            </div>
        </form>
    </div>

</main>
@endsection