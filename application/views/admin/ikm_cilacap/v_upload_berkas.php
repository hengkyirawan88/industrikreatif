<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Upload | Berkas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css"> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <link href="<?php echo base_url(); ?>assets_frontend/img/logo_taniku.png" rel="icon">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

 
<body class="hold-transition register-page">
<div class="register-box" style="width: 100%">
 
<center>
 
  <div class="register-box-body" >
    &nbsp; &nbsp; <br> <br>
 
    <!-- <p class="login-box-msg"><b><h3>Dinas Pertanian dan Pangan Kabupaten Kulonprogo</h3></b></p> -->
    <b><font size="5" face="Arial">STEP 5 <br> <p  style="color: brown"> Upload berkas pendaftaran</p></font></b><br>
&nbsp; &nbsp; <br> <br>
<div class='col-md-1'>
  </div>
    <div class='col-md-5'>

  

   <form action="<?php echo base_url('organisasi/tambah_upload_berkas'); ?>"enctype="multipart/form-data" method="post">
    
    
       <div class="form-group" align="left">
          <label for="inputEmail3" >Upload berkas</label>
          <input type="file" name="upload_berkas" /></br>
          <!-- <span class="help-block">*Upload logo organisasi </span> -->
          <font color="red" >(Semua berkas dijadikan satu file dan di kompres menjadi bertipe zip/rar dengan ukuran maksimal 3 MB)</font>
        </div>
 

      <div class="row">
        <div class="col-xs-12">
          &nbsp; &nbsp;
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 40%"><font size="3" face="Arial"><b>NEXT</b></font></button>
          &nbsp; &nbsp;
          <!-- <input type="hidden" class="form-control" id="inputSuccess" name="rekomendasi_bbm_id"> -->
        </div>


        <!-- /.col -->
      </div>



    </form>

  </div>
  <div class='col-md-1'>
  </div>

   </center>
 
 



  </body>

</html>

<style type="text/css">
  
  /*html, body {
                background-color: #fff;
                background-image: url('./assets_frontend/img/bg.jpg');

                background-size: cover;
                color: #fff;
                font-family: 'Arial', sans-serif;
                font-weight: 200;
 
                margin: 0;
                
            }*/

</style>