<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Profil Industri Kreatif</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- <div id="preloader"></div> -->

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url(); ?>assets_frontend/ikm/index.html">
                  <h1><span>Profil </span>Industri Kreatif</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="<?php echo base_url(); ?>assets_frontend/ikm/img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="<?php echo base_url(); ?>">Home </a>
                  </li>
                  <li>
                    <a class="page-scroll" href="http://industrikreatif.xyz/">Login Admin </a>
                  <
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
<!--   <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Profil IKM </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Kabupaten Cilacap</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- END Header -->
 <div> &nbsp; &nbsp;</div>
  <!-- Start portfolio Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><br><br>Daftar Industri Kecil dan Menengah Kabupaten Cilacap</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach($ikm as $pp){ ?>
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                 
                    <img src='<?=base_url()?>assets_frontend/img/ikm/<?=$pp->gambar; ?>'  style="width: 320px; height: 260px;">
                  
             <!--    <div class="team-social-icon text-center">
                  <ul>
                     
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url().'ikm/detail/'.$pp->ikm_id; ?>">
                          <i class="fa fa-eye"></i>      
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                   
                  </ul>
                </div> -->
              </div>
              <div class="team-content text-center" style="width: 260px; height: 100px;">
                <h4><a href="<?php echo base_url().'ikm/detail/'.$pp->id_ikm; ?>"><?php echo $pp->judul; ?></a></h4>

                <p><b><a href="<?php echo base_url().'ikm/detail/'.$pp->id_ikm; ?>">Selengkapnya...</a></b></p>
              </div>
            </div> &nbsp;
       
          </div>
          <!-- End column -->

          <!-- End column -->
        </div>
        
        <?php } ?>
        
      </div>
     
    </div>
    
  </div>

  
  <!-- awesome-portfolio end -->
  
  <!-- End Service area -->
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Kembali ke Halaman Home </h3>
            <a class="sus-btn" href="http://industrikreatif.xyz/">KLIK DI SINI</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>SIGI</span>KREACAP</h2>
                </div>

                <p>Sistem Informasi Geografis Industri Kreatif Kabupaten Cilacap.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/1.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/2.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/3.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/4.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/5.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/ikm/#"><img src="<?php echo base_url(); ?>assets_frontend/ikm/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="<?php echo base_url(); ?>assets_frontend/ikm/https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/<?php echo base_url(); ?>assets_frontend/ikm/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/contactform/contactform.js"></script>

  <script src="<?php echo base_url(); ?>assets_frontend/ikm/js/main.js"></script>
</body>

</html>
