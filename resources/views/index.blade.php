@extends('layouts.app')

@section('content')

<!--hero section-->

<section class="relative">
    <div class="swiper mySwiper w-full h-[70vh] md:h-[85vh] overflow-hidden">
        
        <div class="swiper-wrapper">
            
            <div class="swiper-slide relative">
                <div class="absolute inset-0 z-0">
                    <img src="images/service-1.png" alt="Stunning Modern Kitchen Renovation" 
                         class="w-full h-full object-cover transition-transform duration-1000 ease-in-out" 
                         style="filter: brightness(0.85);" 
                    >
                </div>
                <div class="absolute inset-0 z-10 bg-black opacity-40"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center p-6 text-center">
                    <div class="max-w-4xl text-white">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4 drop-shadow-lg">
                            Building Visions. Crafting Legacies.
                        </h1>
                        <p class="text-xl sm:text-2xl font-light mb-8 drop-shadow-md">
                            Experience life in a space designed uniquely for you.
                        </p>
                        <!-- <a href="/getaquotes" 
                           class="inline-block px-8 py-3 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white text-lg font-semibold uppercase tracking-wider shadow-xl"
                        >
                            Start Your Project Today
                        </a> -->
                    </div>
                </div>
            </div>

            <div class="swiper-slide relative">
                <div class="absolute inset-0 z-0">
                    <img src="images/service-2.png" alt="Unique Architectural Home Exterior" 
                         class="w-full h-full object-cover transition-transform duration-1000 ease-in-out" 
                         style="filter: brightness(0.85);" 
                    >
                </div>
                <div class="absolute inset-0 z-10 bg-black opacity-40"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center p-6 text-center">
                    <div class="max-w-4xl text-white">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4 drop-shadow-lg">
                            Quality Construction, Timeless Design.
                        </h1>
                        <p class="text-xl sm:text-2xl font-light mb-8 drop-shadow-md">
                            Creating enduring structures that elevate the neighborhood.
                        </p>
                        <!-- <a href="/view-portfolio" 
                           class="inline-block px-8 py-3 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white text-lg font-semibold uppercase tracking-wider shadow-xl"
                        >
                            View Our Portfolio
                        </a> -->
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide relative">
                <div class="absolute inset-0 z-0">
                    <img src="images/service-3.png" alt="Luxurious Bathroom Renovation" 
                         class="w-full h-full object-cover transition-transform duration-1000 ease-in-out" 
                         style="filter: brightness(0.85);" 
                    >
                </div>
                <div class="absolute inset-0 z-10 bg-black opacity-40"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center p-6 text-center">
                    <div class="max-w-4xl text-white">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4 drop-shadow-lg">
                            Refined Spaces. Perfect Execution.
                        </h1>
                        <p class="text-xl sm:text-2xl font-light mb-8 drop-shadow-md">
                            Where every finish and fixture is selected for perfection.
                        </p>
                        <!-- <a href="/consultation" 
                           class="inline-block px-8 py-3 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white text-lg font-semibold uppercase tracking-wider shadow-xl"
                        >
                            Book a Consultation
                        </a> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-pagination"></div>
        
    </div>
</section>
   <!---hero section end--->
   <!--design start-->
  <section class="py-16 md:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        
        <h2 class="text-4xl font-bold mb-4 text-gray-900">Our Expertise: From Foundation to Finish</h2>
        <p class="text-xl text-gray-600 mb-12 max-w-3xl mx-auto">
            Whether you're building a new legacy structure or refining an existing space, we deliver unmatched quality across all phases.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="relative overflow-hidden rounded-xl shadow-xl group cursor-pointer">
                
                <img src="images/interior.png" alt="Luxury Interior Design & Renovation" 
                     class="w-full h-96 object-cover transition duration-500 group-hover:scale-[1.05] filter brightness-75">
                
                <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-white z-10">
                    <h3 class="text-3xl font-bold mb-2 tracking-tight">Interior Renovation & Design</h3>
                    <p class="text-lg mb-6 max-w-sm text-center">
                        Transforming existing spaces with bespoke design, premium materials, and flawless execution.
                    </p>
                    
                    <a href="{{ route('service') }}" 
                       class="px-8 py-3 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white font-semibold uppercase text-sm shadow-xl"
                    >
                        Explore Interior Services
                    </a>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-xl group cursor-pointer">
                
                <img src="images/construction.png" alt="New Home Construction & Structural Build" 
                     class="w-full h-96 object-cover transition duration-500 group-hover:scale-[1.05] filter brightness-75">
                
                <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-white z-10">
                    <h3 class="text-3xl font-bold mb-2 tracking-tight">New Construction & Build</h3>
                    <p class="text-lg mb-6 max-w-sm text-center">
                        Ground-up residential homes, custom additions, and robust commercial structures.
                    </p>
                    
                    <a href="{{ route('project') }}" 
                       class="px-8 py-3 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white font-semibold uppercase text-sm shadow-xl"
                    >
                        View Construction Services
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--design end-->
<!--before & after start-->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

    <!-- Card 1 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/livingroom.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            Living Room
        </span>
    </div>

    <!-- Card 2 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/masterbedroom.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            Master Bedroom
        </span>
    </div>

    <!-- Card 3 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/false-ceiling.png" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            False Ceiling
        </span>
    </div>

    <!-- Card 4 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/dining.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            Dining Area
        </span>
    </div>

    <!-- Card 5 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/kitchen.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            Kitchen
        </span>
    </div>

    <!-- Card 6 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/wardrobe.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded">
            Wardrobe
        </span>
    </div>

</div>

<!-- <section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
        
        <h2 class="text-4xl font-bold mb-4 text-gray-900">See The Transformation</h2>
        <p class="text-xl text-gray-600 mb-12 max-w-3xl mx-auto">
            Witness the dramatic results of our design and construction expertise. We turn dated spaces into modern masterpieces.
        </p>

        <div class="grid grid-cols-1 gap-12">
            
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden p-6">
                <h3 class="text-2xl font-semibold mb-6 text-gray-800 border-b pb-2">
                    Modern Kitchen Remodel
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="relative">
                        <img src="{{ asset('images/false-ceiling.png') }}" alt="Before: Dated Kitchen"
                             class="w-full h-full object-cover rounded-lg border-4 border-red-300">
                        <span class="absolute top-2 left-2 px-3 py-1 bg-red-600 text-white text-sm font-bold uppercase rounded-full shadow-md">
                            Before
                        </span>
                    </div>
                    
                    <div class="relative">
                        <img src="{{ asset('images/false-ceiling.png') }}" alt="After: Modern Open Concept Kitchen"
                             class="w-full h-full object-cover rounded-lg border-4 border-green-300">
                        <span class="absolute top-2 right-2 px-3 py-1 bg-green-600 text-white text-sm font-bold uppercase rounded-full shadow-md">
                            After
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden p-6">
                <h3 class="text-2xl font-semibold mb-6 text-gray-800 border-b pb-2">
                    Luxury Master Bathroom Renovation
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="relative">
                        <img src="{{ asset('images/false-ceiling.png') }}" alt="Before: Old Bathroom" 
                             class="w-full h-full object-cover rounded-lg border-4 border-red-300">
                        <span class="absolute top-2 left-2 px-3 py-1 bg-red-600 text-white text-sm font-bold uppercase rounded-full shadow-md">
                            Before
                        </span>
                    </div>
                    
                    <div class="relative">
                        <img src="{{ asset('images/false-ceiling.png') }}" alt="After: Spa Sanctuary" 
                             class="w-full h-full object-cover rounded-lg border-4 border-green-300">
                        <span class="absolute top-2 right-2 px-3 py-1 bg-green-600 text-white text-sm font-bold uppercase rounded-full shadow-md">
                            After
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="/portfolio" 
                   class="inline-block px-10 py-4 rounded-lg bg-gray-700 hover:bg-gray-800 transition duration-300 text-white text-lg font-semibold uppercase tracking-wider shadow-xl"
                >
                    View Our Full Transformation Gallery
                </a>
            </div>

        </div>
    </div>
</section> -->
<!--before & after end-->
<!--about-->
<div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
    
    <div class="md:w-1/3"> 
        <!-- <img src="images/livingroom1.jpg" alt="Luxury Interior Renovation" class="w-full h-full object-cover"> -->
         <img 
    src="images/livingroom1.jpg" 
    alt="Luxury Interior Renovation"
    class="w-full h-64 md:h-full lg:h-96 object-cover"
/>

    </div>

    <div class="md:w-2/3 p-8 lg:p-12"> 
        <p class="text-sm font-semibold tracking-widest text-gray-500 uppercase mb-2">About Us</p>
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">
        </h2>
        
        <p class="text-base text-gray-700 mb-8">
            For over 15 years, OGEE-CONCERN LLP has been the trusted partner in **luxury renovation** and **quality construction** across Mumbai. We don't just build structures; we craft spaces built to last, guided by precision, transparency, and a deep commitment to our clients' vision.
        </p>

        <div class="mt-8 border-t pt-6">
            <h3 class="text-lg font-bold text-gray-900 mb-3">Get In Touch</h3>
            
            <div class="flex items-center mb-3">
                <span class="text-green-700 mr-3 text-xl">&#9742;</span> 
                <a href="tel:9769398104" class="text-gray-700 hover:text-green-700 text-lg font-semibold">9769398104</a>
            </div>
            
            <div class="mt-4">
                <p class="text-xl font-bold text-gray-900">Kale Irwant</p>
                <p class="text-sm text-gray-600 font-medium mb-1">Co-Founder</p>
                <p class="text-sm text-gray-500">
                    <span class="font-semibold"></span> B-Tech (Civil Engg.), M.Sc. (Org. Chem.)
                </p>
            </div>
        </div>

    </div>
</div>
<!--about-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        // Optional parameters for speed, looping, and effect
        speed: 1000,
        loop: true,
        
        // Autoplay settings
        autoplay: {
            delay: 6000, // 6 seconds per slide
            disableOnInteraction: false,
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // Pagination dots
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
@include('popup')

@endsection