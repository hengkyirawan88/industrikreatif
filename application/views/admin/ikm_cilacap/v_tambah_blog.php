
	
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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/blog') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah AIKM</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/blog/tambah_blog') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

                <div class="form-group">
                  <label>Nama IKM</label>
                  <input  type="text" name="judul" class="form-control" placeholder="Isikan Nama Ikm...."/>
                </div>

                <div class="form-group">
                  <label>Kategori IKM</label>
                  <input  type="text" name="judul" class="form-control" placeholder="Isikan judul berita / artikel...."/>
                </div>

                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class=" "></i> Isi produk IKM*</label>
                  <textarea class="form-control" name="produk" rows="3" placeholder="Enter ..."  ></textarea>
                  <span class="help-block">*Tuliskan tentang produk IKM yg dijual</span>
                </div>


                 <div class="form-group">
				  <label for="inputEmail3"  >Gambar*</label>
				  <input type="file" name="gambar" /></br>
				  <span class="help-block">*Isikan foto berita / artikel </span>
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

	 