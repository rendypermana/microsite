<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mega Insurance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/assets-rendy/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/datepicker/css/datepicker.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/assets-rendy/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="/assets-rendy/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="/assets-rendy/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="/assets-rendy/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/assets-rendy/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets-rendy/css/custom.css">
    <!-- Device--->
    <link rel="stylesheet" href="/assets-rendy/css/device.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{ url('/') }}/assets-rendy//assets-rendy/img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="all">
      </div>
      <!-- header Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand home">
              <img src="{{ url('/') }}/assets-rendy/img/logo.png" alt="Universal logo" class="d-none d-md-inline-block">
              <img src="{{ url('/') }}/assets-rendy/img/logo.png" alt="Universal logo" class="d-inline-block d-md-none">
              <span class="sr-only">Universal - go to homepage</span>
            </a>
            <a href="{{ url('/') }}" class="navbar-right">
              <img src="{{ url('/') }}/assets-rendy/img/logo-right.png">
            </a>
          </div>
        </div>
      </header>
      <!-- header End-->
      @yield('content')
      
      <div class="foot-company">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="company-left">
                <h1>PT Asuransi Umum Mega</h1>
                <div class="addres-office">
                  <p>Bank Mega 18th | JL. Kapten Tendean 12-14 A. Jakarta 12790</p>
                  <p>T (021)7917 5588 | F (021)7917 5024, 7917 5018</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="foot-social">
                <div class="company-right">
                  <img src="{{ url('/') }}/assets-rendy/img/banner_kanan.png">
                </div>
                <div class="social-follow">
                    <p>Follow Us:</p>
                    <span>
                    <ul>
                        <li><a href=""><img src="{{ url('/') }}/assets-rendy/img/facebook-ico.png"></a></li>
                        <li><a href=""><img src="{{ url('/') }}/assets-rendy/img/twitter-ico.png"></a></li>
                        <li><a href=""><img src="{{ url('/') }}/assets-rendy/img/instagram-ico.png"></a></li>
                        <li><a href=""><img src="{{ url('/') }}/assets-rendy/img/youtube-ico.png"></a></li>
                    </ul>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
          <p>Copyright &copy; 2017. PT Asuransi Umum Mega. All rights reserved.</p>
      </div>






    </div>
    <!-- Javascript files-->
    <script src="/assets-rendy/vendor/jquery/jquery.min.js"></script>
    <script src="/assets-rendy/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/assets-rendy/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets-rendy/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/assets-rendy/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="/assets-rendy/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="/assets-rendy/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets-rendy/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="/assets-rendy/js/jquery.parallax-1.1.3.js"></script>
    <script src="/assets-rendy/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets-rendy/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="/assets-rendy/js/front.js"></script>
    <script src="/assets-rendy/vendor/datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
      $('.datepicker').datepicker()
      $(function () {
        $("#inlineCheckbox3").click(function () {
            if ($(this).is(":checked")) {
                $(".tahunan").show();
            } else {
                $(".tahunan").hide();
            }
        });
        $("#inlineCheckbox4").click(function () {
            if ($(this).is(":checked")) {
                $(".sekali-jalan").show();
            } else {
                $(".sekali-jalan").hide();
            }
        });
      });

      
      $(function() {
        $("input[name='perjalanan']").click(function() {
          if ($("#perjalanan2").is(":checked")) {
            $(".sekali-jalan").show();
          } else {
            $(".sekali-jalan").hide();
          }
        });
      });
      $(function() {
        $("input[name='tujuan']").click(function() {
          if ($("#perjalanan2").is(":checked")) {
            $(".sekali-jalan").show();
          } else {
            $(".sekali-jalan").hide();
          }
        });
      });
    </script>
  </body>
</html>