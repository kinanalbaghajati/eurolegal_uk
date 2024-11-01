<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EuroLegal UK</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/title-logo.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontend/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-shop.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/demos/demo-business-consulting-2.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/css/skins/skin-business-consulting-2.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('frontend/vendor/modernizr/modernizr.min.js')}}"></script>

</head>

<body>
<div class="body">
   @include('frontend.partials.header')

    <div role="main" class="main">
      @yield('content')
    </div>

    @include('frontend.partials.footer')
</div>

<!-- Vendor -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('frontend/vendor/lazysizes/lazysizes.min.js')}}"></script>
<script src="{{asset('frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{asset('frontend/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('frontend/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('frontend/js/views/view.contact.js')}}"></script>

<!-- Demo -->
<script src="{{asset('frontend/js/demos/demo-business-consulting-2.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('frontend/js/theme.init.js')}}"></script>

</body>
</html>
