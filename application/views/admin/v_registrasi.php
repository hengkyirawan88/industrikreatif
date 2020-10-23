


   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGISTRASI APLIKASI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="http://industrikreatif.xyz/dashboard/img/favicon.png" rel="icon">
  <link href="http://industrikreatif.xyz/dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="http://industrikreatif.xyz/dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="http://industrikreatif.xyz/dashboard/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://industrikreatif.xyz/dashboard/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="http://industrikreatif.xyz/dashboard/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://industrikreatif.xyz/dashboard/lib/animate/animate.min.css" rel="stylesheet">
  <link href="http://industrikreatif.xyz/dashboard/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="http://industrikreatif.xyz/dashboard/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

   <!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>REGISTRASI AKUN INDUSTRI KREATIF</h1>
       <?php echo $this->session->set_flashdata('msg'); ?> 
     <?php echo $this->session->flashdata('msg'); ?>
      <!-- <h2><b>Sistem Informasi Geografis Industri Kecil dan Mengengah Kabupaten Cilacap</b></h2> -->

      <div class="col-xs-6"> 
   <div class="card card-info">
   
           
              <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/users_ikm_cilacap/tambah_lapangan_reg') ; ?>"enctype="multipart/form-data" method="post">

                <?=$this->session->flashdata('k');?>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                   

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Akun</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_user" class="form-control" id="inputEmail4" required="" placeholder="Nama Akun">
                    </div>
                  </div>
                  <input type="hidden" name="level" class="form-control" id="inputEmail3" value="3">
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" id="inputEmail3" required="" placeholder=" email ">
                    </div>
                  </div>
                   

                  <div class="form-group row">
                    <label >&nbsp;&nbsp;Pilih Industri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Kreatif</i></label>                        
                    <select class="form-control"  id="inputSuccess" name="kode_ikm" required="" style="width: 56%;">
                      <option value=''>Pilih</option>
                      <?php 
                      foreach ($ikm as $pp) {  
                        echo "<option value='".$pp->id_ikm."'>".$pp->judul."</option>";
                      }
                      ?>                                             
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" required="" id="inputEmail3" placeholder=" Username ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" required=" " id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
               <button type="submit" class="btn-get-started scrollto"><b>REGISTRASI</b></button> 
                <!-- /.card-footer -->
              </form>

      <!-- <button type="submit" class="btn btn-info">Log in Admin</button> -->
      <span>Kembali ke<a href="http://industrikreatif.xyz/login_ikm_cilacap"> Login</a></span><br>
       </form>
           
            </div>

            </div>

      <br><!-- <img src="http://gitdev.kulonprogokab.go.id/menaraku/assets_frontend/img/marker/tower_gif_ori.gif" alt="Hero Imgs" width="15%"> -->

      <div class="btns">
        <a href="#"><i class="fa fa-checklist"></i> Create</a>
        <a href="#"><i class="fa fa-checklist"></i> Read</a>
        <a href="#"><i class="fa fa-checklist fa-3x"></i>Update</a>
        <a href="#"><i class="fa fa-checklist fa-3x"></i> Delete</a>
      </div>
    </div>

  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
   



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="http://industrikreatif.xyz/dashboard/lib/jquery/jquery.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/jquery/jquery-migrate.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/superfish/hoverIntent.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/superfish/superfish.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/easing/easing.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/modal-video/js/modal-video.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="http://industrikreatif.xyz/dashboard/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="http://industrikreatif.xyz/dashboard/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="http://industrikreatif.xyz/dashboard/js/main.js"></script>

</body>
</html>

<style type="text/css">
  
  element.style {
    width: 56%;
}
</style>






 
  
 
        
           

  <!-- jQuery 3 -->
 