  
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
  </section>

  <section class="content">

    <div class="row">

    </div>

    <div class="row">
      <div class="col-lg-12">
         
        <a href="<?php echo base_url('admin/ikn_cilacap/produk') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Form Tambah Produk</h3>
          </div>
             
                  <div class="box-body">
                <p><?php echo $this->session->flashdata('msg') ?></p>
                      <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/produk/tambah_produk') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

                <div class="form-group">
                  <label>Nama produk</label>
                  <input  type="text" name="nama" class="form-control" placeholder="Isikan nama...."/>
                </div>

                                   <div class="form-group">
                          <label >Kategori Produk</label>                        
                            <select class="form-control"  id="inputSuccess" name="kategori_produk" style="width: 15%;">
                                            <option value=''>Pilih Kategori Produk</option>
                                              <?php 
                                                foreach ($kategoriproduk as $pp) {  
                                                  echo "<option value='".$pp['id_kategoriproduk']."'>".$pp['nama_kategoriproduk']."</option>";
                                                }
                                              ?>                                              
                                          </select>
                        
        </div>

                          <div class="form-group">
                          <label >IKM</label>                        
                            <select class="form-control"  id="inputSuccess" name="kode_ikm" style="width: 15%;">
                                            <option value=''>Pilih IKM</option>
                                              <?php 
                                                foreach ($ikm as $pp) {  
                                                  echo "<option value='".$pp['id_ikm']."'>".$pp['judul']."</option>";
                                                }
                                              ?>                                              
                                          </select>
                        
        </div>

         <div class="form-group">
          <label for="inputEmail3"  >Gambar*</label>
          <input type="file" name="gambar_produk" /></br>
          <span class="help-block">*Isikan Gambar IKM </span>
          <font color="red" >(File bertipe jpg/png/gif dengan ukuran maksimal 2 MB)</font>
        </div>



              
                   

 
                      <!-- /.box-body -->
            <div class="box-footer">
            <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >Simpan</button>
            <!-- <input type="hidden" class="form-control" id="inputSuccess" name="kios_saprodi_id"> -->
            </div>
                      <!-- /.box-footer -->
                    
              </div>
             </form>
        </div>

      </div>
    </div>

  </section>

</div>

   