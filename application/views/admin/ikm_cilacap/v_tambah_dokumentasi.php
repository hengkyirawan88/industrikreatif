

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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/ikm') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Dokumentasi</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/dokumentasi/tambah_dokumentasi') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

               <div class="form-group">
                                                    <label>Pilih IKM</label>
                                                     <select class="form-control"  id="inputSuccess" name="id_ikm" style="width: 15%;">
                                                    <option value=''>Pilih</option>
                                                      <?php 
                                                        foreach ($varikm as $pp) {  
                                                          echo "<option value='".$pp->id_ikm."'>".$pp->judul."</option>";
                                                        }
                                                      ?>                                                      
                                                  </select>
                                                </div>

                                                 <div class="form-group">
                  <label>Judul Dokumentasi</label>
                  <input style="width: 50%;" type="text" name="judul_dokumentasi" class="form-control" placeholder="Isikan judul dokumentasi...."/>
                </div>

                <div class="form-group">
				                  <label >Kategori Dokumentasi</label>				                 
				                <select id="kategori_dokumentasi" class="form-control" name="kategori_dokumentasi" style="width: 15%;">
                                    <option value="">Pilih Kategori</option> 
                                    <option value="seminar">Seminar</option>
                                    <option value="pelatihan">Pelatihan</option>
                                    <option value="produksi">Produksi</option>   
                                    <option value="lainnya">Lain - lain</option>   
                                                                                                                                       
                                </select>
                                
				                
				</div>

                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class=" "></i> Keterangan*</label>
                  <textarea class="form-control" name="keterangan" rows="3" placeholder="Isikan keterangan..."  ></textarea>
                  <span class="help-block">*Tuliskan 5W1H</span>
                </div>
 
 


                 <div class="form-group">
				  <label for="inputEmail3"  >Gambar*</label>
				  <input type="file" name="gambar_dokumentasi" /></br>
				  <span class="help-block">*Isikan Foto Agenda </span>
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

	 