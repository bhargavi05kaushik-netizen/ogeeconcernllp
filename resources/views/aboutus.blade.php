@extends('layouts.app')

@section('content')
<main class="w-full bg-white text-gray-800">

    <section class="relative w-full h-[60vh] overflow-hidden bg-gray-900">
        <img src="path/to/leadership-team-photo.jpg" alt="OGEE-CONCERN Leadership Team" 
             class="absolute inset-0 w-full h-full object-cover opacity-30">
        
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center p-6">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 tracking-tight drop-shadow-lg">
                Beyond the Build: Crafting Legacies
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl">
                Founded on the principle of uncompromising quality and ethical partnership, OGEE-CONCERN LLP has been transforming spaces in Mumbai last 15 years.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Our Commitment to Excellence</h2>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto mb-12">
                Our mission is to seamlessly blend **architectural excellence** with **uncompromising quality** and **client collaboration**, transforming visions into enduring realities that reflect our clients' highest aspirations.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-3xl text-gray-700 mb-3">🛠️</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Unmatched Craftsmanship</h3>
                    <p class="text-gray-600">Precision in every detail, using only premium, durable materials for lasting quality.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-3xl text-gray-700 mb-3">🤝</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Total Integrity & Trust</h3>
                    <p class="text-gray-600">Transparent pricing, honest communication, and ethical practices from consultation to handover.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-3xl text-gray-700 mb-3">💡</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900">Innovative Solutions</h3>
                    <p class="text-gray-600">Leveraging modern technology and efficient processes to deliver projects smartly and efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <hr class="border-gray-200">

    <section class="py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Experience You Can Rely On</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-gray-700 mb-1">20+</p>
                    <p class="text-sm font-medium uppercase text-gray-500">Years Experience</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-gray-700 mb-1">500+</p>
                    <p class="text-sm font-medium uppercase text-gray-500">Projects Completed</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-gray-700 mb-1">98%</p>
                    <p class="text-sm font-medium uppercase text-gray-500">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-gray-700 mb-1">Fully</p>
                    <p class="text-sm font-medium uppercase text-gray-500">Licensed & Insured</p>
                </div>
            </div>
            
            <!-- <div class="text-center mt-16">
                <h3 class="text-xl font-semibold mb-6 text-gray-900">Our Affiliations & Awards</h3>
                <div class="flex flex-wrap justify-center items-center space-x-8 opacity-70">
                    <img src="path/to/builder-assoc-logo.png" alt="Builder Association Logo" class="h-10">
                    <img src="path/to/award-logo.png" alt="Industry Award Logo" class="h-10">
                    <img src="path/to/safety-cert-logo.png" alt="Safety Certification Logo" class="h-10">
                </div>
            </div> -->
        </div>
    </section>

    <hr class="border-gray-200">

    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-16 text-center text-gray-900">Meet the cofounder</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                
                <div class="text-center">
                    <img src="images/.jpg" alt="CEO Name" class="w-36 h-36 rounded-full mx-auto object-cover mb-4 shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-900">IRWANT KALE</h3>
                     <p class="text-sm text-gray-500">
                    <span class="font-semibold"></span> B-Tech (Civil Engg.), M.Sc. (Org. Chem.)
                </p>
                    <p class="text-lg text-gray-700 mb-3">Founder & CEO</p>
                    <p class="text-gray-600 text-sm italic">"Driven by a passion for structural integrity and timeless design."</p>
                </div>

            
            </div>
        </div>
    </section>

    <hr class="border-gray-200">

    <section class="py-16 md:py-24 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            
            <blockquote class="text-2xl italic mb-10 border-l-4 border-gray-400 pl-4">
                “OGEE-CONCERN LLP managed our complex renovation flawlessly, delivering a stunning result while keeping us informed every step of the way. True professionals.”
            </blockquote>
            <cite class="text-lg font-semibold block mb-12">- The Gupta Family, Residential Client</cite>

            <h2 class="text-3xl font-bold mb-6">Ready to Partner with an Experienced Team?</h2>
            <!-- <a href="/contact" 
               class="inline-block px-10 py-4 rounded-lg bg-gray-400 hover:bg-gray-300 transition duration-300 text-gray-900 text-lg font-semibold uppercase tracking-wider shadow-lg"
            >
                Start Your Consultation Now
            </a> -->
        </div>
    </section>

</main>
@endsection