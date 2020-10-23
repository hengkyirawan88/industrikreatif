<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Daftar Donatur</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/blog/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/blog/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url(); ?>assets_frontend/blog/index.html">
                  <h1><span>Daftar </span>Donatur</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="<?php echo base_url(); ?>assets_frontend/blog/img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#blog">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>assets_frontend/blog/#contact">Contact</a>
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
 <div class="content-wrapper">
  <section class="content-header">
    <h1>
      &nbsp;
      <small>&nbsp;</small>
    </h1>
  </section>

  <section class="content">

      <div class="row">

    </div>

    

    <div class="row">
      <div class="col-lg-12">
        
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <center><h3 class="box-title">Daftar Donatur Pembangunan RT Ibnu Abbas Magetan</h3></center>
            &nbsp;

                 

          </div>



                  <center><div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: 45%">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th width="25%"><center>Nama Donatur </center></th>
                              <th width="14%" >Jumlah Donasi (Rp/kg)</th>
                              

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($donatur as $pp){ 
                            ?>
                            <tr>
                               <td><center><?php echo $no++; ?>.</center></td>
                               <td><center><?php echo $pp->nama_donatur; ?></center></td> 
                               <td><?php echo $pp->jumlah; ?></td>
                                
                            </tr>
                            
                            <?php } ?> 
<?php 
                              $no = 1;
                              foreach($donatur as $pp){ 
                            ?>
                            <tr>
                               <td></td>
                               <td><center><b>Total Donasi</b></center></td> 
                               <td><?php echo $pp->jumlah; ?></td>
                            </tr><!-- S
                               <?php } ?> elesai loop -->
                        </tbody>
                        </table>
                   
                  </div>
                   </center>
                   <center><button type="submit" class=" "> <a href="<?php echo base_url('donatur'); ?>"> << Kembali </button></center>
                   &nbsp; &nbsp;
        </div>

      </div>
    </div>

  </section>

</div>

   
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><i class="fa fa-pinterest"></i></a>
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
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/1.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/2.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/3.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/4.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/5.jpg" alt=""></a>
                  <a href="<?php echo base_url(); ?>assets_frontend/blog/#"><img src="<?php echo base_url(); ?>assets_frontend/blog/img/portfolio/6.jpg" alt=""></a>
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
              Designed by <a href="<?php echo base_url(); ?>assets_frontend/blog/https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>assets_frontend/blog/<?php echo base_url(); ?>assets_frontend/blog/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets_frontend/blog/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>assets_frontend/blog/contactform/contactform.js"></script>

  <script src="<?php echo base_url(); ?>assets_frontend/blog/js/main.js"></script>
</body>

</html>
