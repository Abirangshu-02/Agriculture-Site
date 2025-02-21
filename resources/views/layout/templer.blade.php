<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - AgriCulture</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('all_static/img/favicon.png')}}" rel="icon">
  <link href="{{asset('static/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('static/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('static/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('static/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('static/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('static/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('static/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  @includeIf('layout.header');
        
  @yield('content')

  @includeIf('layout.footer');

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('static/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('static/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('static/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('static/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('static/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('static/js/main.js')}}"></script>
</body>

</html>





  