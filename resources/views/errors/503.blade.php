<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>Webuild - Free Bootstrap coming soon template with countdown</title>

  <!-- Bootstrap -->
  <link href="webuild/assets/css/bootstrap.css" rel="stylesheet">
  <link href="webuild/assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="webuild/assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="webuild/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Karolina Kardasz <br>
          Szkoła Rodzenia Majka<br>
          Indywidualna Praktyka Położnicza</h1>
          <h2 class="subtitle">Strona w budowie. Dokładamy wszelkich starań, aby udoskonalić naszą stronę internetową.</h2>
          <div id="countdown"></div>

        </div>
      </div>

      <div class="row contctform">
        <div class="col-md-8 col-md-offset-2">
          <h3>Kontakt:</h3>
          <h3>telefon: 501 262 980</h3>
          <h3>email: szkolarodzeniamajka@gmail.com</h3>
        </div>


      </div>

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; WeBuild - All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=WeBuild
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="webuild/assets/js/bootstrap.min.js"></script>
  <script src="webuild/assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2018/08/20', function(event) {
      $(this).html(event.strftime('%w tydzień %d dni <br /> %H:%M:%S'));
    });
  </script>

  <script src="contactform/contactform.js"></script>

</body>

</html>
