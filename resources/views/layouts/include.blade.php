<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Apesek Girimpuhwe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('public/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.2.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('public/assets/img/logo.png') }}" alt="">
        <h1>apesek</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('history') }}">History</a></li>
              <li><a href="{{ route('mission') }}">Mission & Vision</a></li>
              <li><a href="{{ route('founder') }}">Founder</a></li>
        
            </ul>
          </li>
          <li><a href="services.html">Events</a></li>
          <li class="dropdown"><a href="#"><span>What We do</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              @foreach ($categories as $category)
              <li><a href="{{ route('category', ['id'=>$category->id]) }}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="">News Field</a></li>
          <li><a href="{{ route('founder') }}">Our impact</a></li>

          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a class="get-a-quote" href="https://kbfus.networkforgood.com/projects/53011-a-kbfus-funds-asso-for-supervision-of-orphan-children-apesek-rw">Donate</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

{{-- @yield('panel') --}}

@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Apesek Girimpuhwe</span>
          </a>
          <p>Promote the well-being of orphans and other vulnerable children to the same level as other children.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/APESEKGIRIMPUHW" class="twitter" data-show-screen-name="false" data-show-count="false"><i class="bi bi-twitter"></i></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a href="https://web.facebook.com/apesek2002" data-layout="button" data-action="like" data-size="small" data-share="false" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('history') }}">Our History</a></li>
            <li><a href="{{ route('mission') }}">Mission & Vision</a></li>
            <li><a href="{{ route('founder') }}">Our Founder</a></li>
            <li><a href="#">News Field</a></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            B.P 320 Gisenyi,Rwanda <br>
            Kivumu Sector,<br>
            Rustiro District <br><br>
            <strong>Phone:</strong> +250 788 627 686<br>
            <strong>Email:</strong> apesegi@yahoo.fr<br>
          </p>

        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Apesek</span></strong>. All Rights Reserved
      </div>
      
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  {{-- <div id="preloader"></div> --}}
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="lj3xYege"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/assets/js/main.js') }}"></script>

</body>

</html>
