<!doctype html>
<html lang="en">

  <head>
    <title>R9R-Line</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= WEBROOT ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= WEBROOT ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= WEBROOT ?>css/style.css">
    <link rel="stylesheet" href="<?= WEBROOT ?>css/styles.css">

    <script src="<?= WEBROOT ?>asset/js/jquery.min.js"></script>



  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php">R9R-Line</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="<?= WEBROOT ?>accueil" class="nav-link">Home</a></li>
                  <li ><a href="<?= WEBROOT ?>voyage" class="nav-link">Voyage</a></li>
                  <li><a href="<?= WEBROOT ?>about" class="nav-link">About</a></li>
                  <li><a href="<?= WEBROOT ?>panier" class="nav-link">Panier</li>
                    <span id="total">
                      <?php
                        if(isset($_SESSION['totalpanier'])) {
                          if ($_SESSION['totalpanier']!=0){
                            echo '<i class="badge badge-light">';
                            echo $_SESSION['totalpanier'];
                            echo '</i>';
                          }
                        }
                      ?>
                    </span>
                  </a>
                  <li><a href="<?= WEBROOT ?>contact" class="nav-link">Contact</a></li>


                  <?php
                  if (isset($_SESSION['loggedin']) != true) { 
                    ?>
                    <li><a href="<?= WEBROOT ?>inscription" class="nav-link">Identifiez-vous</a></li>
                  
                  <?php
                  }
                  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                      ?>
                      <li><a href="<?= WEBROOT ?>profil" class="nav-link">Profil</a></li>
                      <?php
                  }
                  ?>
                  <!--class="active"-->

                </ul>
              </nav>
            </div>
           
            
          </div>
        </div>

      </header>

    <main>

      <?php
        echo $content_for_layout;
      ?>

    </main>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img src="<?= WEBROOT ?>images/travel.jpg" alt="Image" class="img-fluid mb-5">
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="<?= WEBROOT ?>about" class="nav-link btn btn-primary">About Us</a></li>
                  <li><a href="<?= WEBROOT ?>contact" class="nav-link btn btn-primary">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
</footer>

</div>

<script src="<?= WEBROOT ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery-migrate-3.0.0.js"></script>
<script src="<?= WEBROOT ?>js/popper.min.js"></script>
<script src="<?= WEBROOT ?>js/bootstrap.min.js"></script>
<script src="<?= WEBROOT ?>js/owl.carousel.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery.sticky.js"></script>
<script src="<?= WEBROOT ?>js/jquery.waypoints.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery.fancybox.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery.stellar.min.js"></script>
<script src="<?= WEBROOT ?>js/jquery.easing.1.3.js"></script>
<script src="<?= WEBROOT ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= WEBROOT ?>js/aos.js"></script>

<script src="<?= WEBROOT ?>js/main.js"></script>
<script src="<?= WEBROOT ?>panier.js"></script>
</body>
