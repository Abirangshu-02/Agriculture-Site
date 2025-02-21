<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('static/img/logo.png')}}" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('Home')}}" class="active">Home</a></li>
          <li><a href="{{route('About')}}">About Us</a></li>
          <li><a href="{{route('Services')}}">Our Services</a></li>
          <li><a href="{{route('Testimonials')}}">Testimonials</a></li>
          <li><a href="{{route('Blog')}}">Blog</a></li>
          <li><a href="{{route('contact_form')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
</header>