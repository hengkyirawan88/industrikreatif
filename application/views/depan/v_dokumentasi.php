 
<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>assets_frontend/img/intro-carousel/ikan.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>DOKUMENTASI KEGIATAN IKM</h2>
                <p>"Kabupaten Cilacap"</p>
                <a href="#portfolio" class="btn-get-started scrollto">LIHAT DOKUMENTASI</a>
              </div>
            </div>
          </div>

           

       <!--    <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url(); ?>assets_frontend/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>About SIKECAP</h2>
                <p>"Sebuah aplikasi untuk membantu pengelolaan aktifitas IKM berbasis teknologi"</p>
                <a href="#about" class="btn-get-started scrollto">START MAP</a>
              </div>
            </div>
          </div> -->

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <br><br><br><h3 class="section-title">Foto - foto kegiatan IKM</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".seminar">Seminar</li>
              <li data-filter=".pelatihan">Pelatihan</li>
              <li data-filter=".produksi">Produksi</li>
              <li data-filter=".lainnya">Lain lain</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php foreach($dokumentasi_seminar as $pp){ ?>
           <div class="col-lg-4 col-md-6 portfolio-item seminar wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" data-lightbox="portfolio" data-title="<?php echo $pp->keterangan; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $pp->judul_dokumentasi; ?></a></h4>
              
                <p><?php echo $pp->judul; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <div class="row portfolio-container">
          <?php foreach($dokumentasi as $pp){ ?>
           <div class="col-lg-4 col-md-6 portfolio-item pelatihan wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" data-lightbox="portfolio" data-title="<?php echo $pp->keterangan; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $pp->judul_dokumentasi; ?></a></h4>
          
                <p><?php echo $pp->judul; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <div class="row portfolio-container">
          <?php foreach($dokumentasi_produksi as $pp){ ?>
           <div class="col-lg-4 col-md-6 portfolio-item produksi wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" data-lightbox="portfolio" data-title="<?php echo $pp->keterangan; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $pp->judul_dokumentasi; ?></a></h4>
                <p><?php echo $pp->judul; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

            <div class="row portfolio-container">
          <?php foreach($dokumentasi_lainnya as $pp){ ?>
           <div class="col-lg-4 col-md-6 portfolio-item lainnya wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url(); ?>assets_frontend/img/dokumentasi/<?php echo $pp->gambar_dokumentasi; ?>" data-lightbox="portfolio" data-title="<?php echo $pp->keterangan; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $pp->judul_dokumentasi; ?></a></h4>
                <p><?php echo $pp->judul; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

         



 

       

      </div>
    </section><!-- #portfolio -->