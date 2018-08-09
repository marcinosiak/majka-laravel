<!DOCTYPE html>
<html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Szkoła Rodzenia Majka</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/slippry.css" />

    <link href="/css/majka.css" rel="stylesheet">

  </head>

  <body>
    <div class="container-fluid">
    <header>

      <nav class="navbar navbar-expand-lg majka-box-bg">
              <a class="navbar-brand" href="#">tel. 501 262 980</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  &#9776;
              </button>

              {!! menu('main_menu', 'layouts.navigation') !!}
      </nav>


      <div class="row vertical-center top-title">
          <div class="col-sm text-center">
            <h2>Karolina Kardasz</h2>
            <h5>Indywidualna Praktyka Położnicza</h5>
          </div>
          <div class="col-sm-3 text-center">
            <img alt="logo" src="{{ asset('images/logo.png') }}">
          </div>
          <div class="col-sm">
            <h1>Szkoła Rodzenia Majka</h1>
          </div>
      </div>

    </header>

    @yield('content')

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @yield('script')

    </div> <!-- end container-fluid -->
  </body>

</html>
