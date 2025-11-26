<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="copyright" content="MACode ID, https://macodeid.com/">
 <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="front_end/assets/css/maicons.css">
  <link rel="stylesheet" href="front_end/assets/css/bootstrap.css">
  <link rel="stylesheet" href="front_end/assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="front_end/assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="front_end/assets/css/theme.css">
</head>
<body>

    <div class="back-to-top"></div>

  <header>
    @include('partials.navbar')
  </header>


  {{-- 1. Static/Included Content (e.g., Hero Section) --}}
  @include('partials.hero-section')

  {{-- 2. Dynamic Content (Doctor List) --}}
  {{-- 🎯 Change: We INCLUDE the doctor list partial directly here. 
       It uses the $doctors variable passed from the controller. --}}
 @include('pages.doctor-index')

  {{-- 3. Remaining Sections (Included by default on the homepage) --}}
  @include('pages.news-index')
  @include('pages.appointment-create')
  @include('partials.banner')  

  @include('partials.footer')
  
  <script src="front_end/assets/js/jquery-3.5.1.min.js"></script>
  <script src="front_end/assets/js/bootstrap.bundle.min.js"></script>
  <script src="front_end/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="front_end/assets/vendor/wow/wow.min.js"></script>
  <script src="front_end/assets/js/theme.js"></script>
  
  {{-- Allows child views to push specific scripts (like the carousel init script) --}}
  @stack('scripts') 
  
</body>
</html>