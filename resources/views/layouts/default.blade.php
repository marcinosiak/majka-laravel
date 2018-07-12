<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Szkoła Rodzenia Majka</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="/css/majka.css" rel="stylesheet">

    <!-- Owl carusel styles -->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.default.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">tel. 500 555 500</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          {!! menu('top-menu') !!}
        </div>
      </div>
    </nav>

    <div class="top-info container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          Karolina Kardasz <br>
          Indywidualna Praktyka Położnicza
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          logo
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          Szkoła Rodzenia Majka
        </div>
      </div>
    </div>

    @yield('content')

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Plugin JavaScript -->
    {{-- <script src="/vendor/jquery-easing/jquery.easing.min.js"></script> --}}
    {{-- <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> --}}

    <!-- Contact Form JavaScript -->
    {{-- <script src="/js/jqBootstrapValidation.js"></script> --}}
    {{-- <script src="/js/contact_me.js"></script> --}}

    <!-- Custom scripts for this template -->
    {{-- <script src="/js/freelancer.min.js"></script> --}}

    @yield('script')


  </body>

</html>
