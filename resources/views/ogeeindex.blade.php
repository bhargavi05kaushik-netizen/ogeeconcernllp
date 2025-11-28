<!DOCTYPE html><html lang="zxx"><head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Bootstrap Css -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" media="screen">
<!-- Swiper Css -->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

<!-- Font Awesome Icon Css -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" media="screen">

<!-- Animated Css -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

<!-- Magnific Popup Core Css File -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<!-- Mouse Cursor Css File -->
<link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}">

<!-- Main Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css"> -->
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
 <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <!-- <script src="js/jquery.slicknav.js"></script> -->
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     </body></html>