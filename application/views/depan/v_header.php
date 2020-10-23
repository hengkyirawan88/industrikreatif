<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>INDUSTRI KREATIF CILACAP</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="https://i.dlpng.com/static/png/6529336_preview.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets_frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

   <script src="http://maps.google.com/maps/api/js?sensor=false?file=api&v=2&key=AIzaSyAVQ2aIg5D6B1yyObMTowtn2rYcz6ld0TE&language=in&region=ID&&callback=initMap" type="text/javascript"></script>

    <script>
        var marker;

        function initialize() {

            // Variabel untuk menyimpan informasi (desc)
            var infoWindow = new google.maps.InfoWindow;

            //  Variabel untuk menyimpan peta Roadmap
            var mapOptions = {

                mapTypeId: google.maps.MapTypeId.ROADMAP,
                // center: new google.maps.LatLng(-7.8124709, 110.0040523),
                zoom: 1
            }

            // Pembuatan petanya
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var bounds = new google.maps.LatLngBounds();
            //Pengambilan data dari database
            <?php
         $con=mysqli_connect("localhost","batikpas_u5rinkre","Hz3,xfH$$,3v","batikpas_sigikreacap");
        ?>
            <?php
            $query = mysqli_query($con,"SELECT * FROM `ikm`");
            while ($data = mysqli_fetch_array($query))
            {
                $menara_id = $data['id_ikm'];
                $nama = $data['judul'];
                $isi = $data['alamat'];
                $kategori = $data['kategori'];
                $produk = $data['produk'];
                $kontak = $data['kontak'];
                $tanggal = $data['tanggal'];
                // $map_jarak_tempuh = $data['map_jarak_tempuh'];
                // $produk_kios = $data['kategori_menara'];
                // $keterangan_kios = $data['nama_plate'];
                // $tgl_pendirian = $data['tata_guna_lahan'];
                // $kontak_kios = $data['utara'];
                // $tujuan = $data['selatan'];
                $gambar = $data['gambar'];
                // $jenis_organisasi = $data['barat'];
                // $jumlah_unit = $data['timur'];
                // $nama_ketua = $data['tinggi_gps'];
                // $nama_sekretaris = $data['pemilik_menara'];
                // $nama_bendahara = $data['menara_id'];
                $lat = $data['latitude'];
                $lon = $data['longitude'];
                 

                echo ("addMarker($lat, $lon, '<center><h5><b> $nama</b></h5></center> <center><img src=\'assets_frontend/img/ikm/$gambar\' height=\'50%\' width=\'80%\'></center><br><h6> Alamat : <b>$isi</b></h6>   <h6> Kontak : <b>$kontak</b> </h6>    <h6> Produk : <b>$produk</b> </h6>   ');\n");                      
            }
          ?>

            // Proses membuat marker 
            function addMarker(lat, lng, info) {
                var lokasi = new google.maps.LatLng(lat, lng);
                bounds.extend(lokasi);
                var image = 'http://industrikreatif.xyz/assets/marker_ori.gif';
                // var image = 'http://gitdev.kulonprogokab.go.id/peta/upload/category_img/tower.png';
                var marker = new google.maps.Marker({
                    map: map,
                    position: lokasi,
                    icon: image
                        // animation: google.maps.Animation.BOUNCE
                });
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);

            }

            // Menampilkan informasi pada masing-masing marker yang diklik
            function bindInfoWindow(marker, map, infoWindow, html) {
                // this.setContent('<div class="map-marker info"><a href='+ this.url +'>'+this.nama_kios+'</a></div>');
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });

            }

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //tooltip only text
            $('.masterTooltip').hover(function() {
                //hover over code
                var title = $(this).attr('title');
                $(this).data('tipText', title).removeAttr('title');
                $('<p class="tootip"></p>')
                    .text(title)
                    .appendTo('body')
                    .fadeIn('slow');
            }, function() {
                //hover out code
                $(this).attr('title', $(this).data('tipText'));
                $('.tootip').remove();
            }).mousemove(function(e) {
                var mousex = e.pageX + 20; //GET Y COORDINATES
                var mousey = e.pageY + 10; //GET Y COORDINATES
                $('.tootip')
                    .css({
                        top: mousey,
                        left: mousex
                    })
            });
        });
    </script>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">SIGIKREACAP</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url().'' ?>">Home</a></li>
          <li><a href="#featured-services">Tentang SIGIKREACAP</a></li>
          <li><a href="#about">Lihat Peta</a></li>
          <li><a href="#services">Jenis Industri Kreatif</a></li>
          <li><a href="#call-to-action">Video Industri Kreatif </a></li>
          

          
          <li class="menu-has-children"><a href="">Menu Lainnya</a>
            <ul>
              <!-- <li><a href="#contact">Kontak Kami</a></li> -->
              
             
             
              <!-- <li><a href="http://industrikreatif.xyz/donatur">Daftar IKM</a></li> -->
                
                <li><a href="#facts">Statistik Industri Kreatif</a></li>
                </li><li><a href="#team">Team Work</a></li>
                 <li><a href="http://industrikreatif.xyz/ikm">Profil Industri Kreatif Cilacap</a></li>
                 <li><a href="#contact">Kontak Kami</a>
                  <!-- <li><a href="http://industrikreatif.xyz/home/dokumentasi">Dokumentasi Kegiatan</a></li> -->
             
              
              <li><a href="http://industrikreatif.xyz/login_ikm_cilacap">Login Admin</a></li>
            </ul>
          </li>
          
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->