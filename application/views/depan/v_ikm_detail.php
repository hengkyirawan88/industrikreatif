<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Detail Industri Kreatif</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets_frontend/ikm/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
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
                 <h1><span>Profil </span>Industri kreatif</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="<?php echo base_url(); ?>assets_frontend/ikm/img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="<?php echo base_url(); ?>">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>login_ikm_cilacap">Login Admin</a>
                  </li>
                   lass="page-scroll" href="<?php echo base_url(); ?>assets_frontend/ikm/#contact">Contact</a>
                  </li>
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
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Profil Industri Kreatif</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Kabupaten Cilacap</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="ikm-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-ikm">
            <div class="single-ikm-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-ikm-page">
              <!-- recent start -->
              <div class="left-ikm">
                <h4>Link post IKM terbaru</h4>
                <div class="recent-post">
                  <?php foreach($ikm as $pp){ ?>
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="<?php echo base_url().'ikm/detail/'.$pp->id_ikm; ?>" target=_blank>
                           <img src="<?=base_url()?>assets_frontend/img/ikm/<?=$pp->gambar; ?>" alt="">
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="<?php echo base_url().'ikm/detail/'.$pp->id_ikm; ?>"><b> <?php echo $pp->judul; ?></b></a></p>
                      <p><a href="<?php echo base_url().'ikm/detail/'.$pp->id_ikm; ?>"><b> Produk : </b><?php echo $pp->produk; ?></a></p>
                    </div>
                  </div>
                  
                   <?php } ?>
                </div>
              </div>
              <!-- recent end -->
            </div>
             <br>
            <div class="single-ikm-page">
              <div class="left-tags ikm-tags">
                <div class="popular-tag left-side-tags left-ikm">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">UKM</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Kerajinan</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Kuliner</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Fashion</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Marketplace</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Ekonomi</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Merakyat</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/ikm/#">Industri</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single ikm -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-ikm start -->
              <article class="ikm-post-wrapper">

                <div class="post-thumbnail">
                  <center> 
                  <img src="<?php echo base_url('assets_frontend/img/ikm/'.$varikm->gambar) ?>" alt="" /> 
                  </center>
                </div>
                <div class="post-information">
                  <center><h2><b><?php echo $varikm->judul;?></b></h2>
                   </center>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">Industri kreatif</a></span>
                    <span><i class="fa fa-clock-o"></i> Kabupaten Cilacap</span>
                  
                   
                 
                  </div>
                  <div class="entry-content">
                    <p align="justify" >Industri kreatif <?php echo $varikm->judul;?> merupakan salah satu Industri kreatif yang ada di Kabupaten Cilacap. Industri ini beralamatkan di <?php echo $varikm->alamat;?>. Kemudian industri kreatif ini memiliki produk berupa <?php echo $varikm->produk;?>. Jika anda berminat untuk mengunjungi atau mendapatkan produk - produk terbaik dari <?php echo $varikm->judul;?>, silahkan bisa hubungi kontak di bawah ini. Terima kasih. 
                   </p>
                    <blockquote>
                   <p>Kontak Person <?php echo $varikm->judul;?> :  <?php echo $varikm->kontak;?></p>  
                    </blockquote>
                      <p align="justify">Demikian profil tentang <?php echo $varikm->judul;?>. Semoga profil ini bermanfaat.
                   </p>
                  </div>
                </div>
          


 

</article>
            
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- End ikm Area -->
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
                  <h2><span>Si</span>Kecap</h2>
                </div>

                <p>Sistem Informasi Geografis Industri Kecil dan Mengengah Kabupaten Cilacap.</p>
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
  <script src="<?php echo base_url(); ?>assets_frontend/ikm/lib/jquery/jquery.min.js"></script>
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
