@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

    <!-- Video Card 1 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <video class="w-full h-72 object-cover" autoplay loop muted playsinline>
            <source src="videos/video1.mp4" type="video/mp4">
        </video>
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

    <!-- Video Card 2 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <video class="w-full h-72 object-cover" autoplay loop muted playsinline>
            <source src="videos/video2.mp4" type="video/mp4">
        </video>
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

    <!-- Video Card 3 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <video class="w-full h-72 object-cover" autoplay loop muted playsinline>
            <!-- <source src="videos/video3.mp4" type="video/mp4"> -->
        </video>
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

    <!-- Image Card 1 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/IMG8.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

    <!-- Image Card 2 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/IMG9.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

    <!-- Image Card 3 -->
    <div class="relative rounded-2xl overflow-hidden shadow-md">
        <img src="images/IMG10.jpg" class="w-full h-72 object-cover" />
        <span class="absolute bottom-3 left-3 bg-black/70 text-white text-sm px-3 py-1 rounded"></span>
    </div>

</div>
@endsection
