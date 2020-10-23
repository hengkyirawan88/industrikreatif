

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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/dokumentasi') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Edit IKM</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/dokumentasi/update') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              

                <div class="form-group">
                  <label>Judul</label>
                  <textarea  type="text" name="judul_dokumentasi" class="form-control" style="width: 100%;"><?php echo $vardonatur->judul_dokumentasi;?>  </textarea>
                </div>


<!--                  <div class="form-group">
				                   <label>Nama IKM</label>				                 
				                    <select name="id_ikm" class="form-control" style="width: 15%;">
			                                     <?php 
			                                       foreach($listikm as $vikm) {
			                                        if ($vikm->id_ikm == $vardokumentasi->id_ikm) {
			                                          echo '<option value="'.$vikm->id_ikm.'" selected>'.$vikm->judul.' </option>';
			                                        } else {
			                                          echo '<option value="'.$vikm->id_ikm.'">'.$vikm->judul.'</option>';
			                                        }
			                                      }
			                                      ?>
			                        </select>
				                
				</div>  -->


              
             

                  <div class="form-group">
				                  <label >Kategori IKM</label>				                 
				                <select id="kategori_produk" class="form-control" name="kategori_dokumentasi" style="width: 15%;" >
                                    <option value="">Pilih Kategori IKM</option> 
                                    <option value='seminar' <?php if($vardonatur->kategori_dokumentasi == 'seminar'){ echo 'selected'; } ?> >Seminar</option>
                                     <option value='produksi' <?php if($vardonatur->kategori_dokumentasi == 'produksi'){ echo 'selected'; } ?> >Produksi</option>
                                      <option value='pelatihan' <?php if($vardonatur->kategori_dokumentasi == 'pelatihan'){ echo 'selected'; } ?> >Pelatihan</option>
                                       <option value='lainnya' <?php if($vardonatur->kategori_dokumentasi == 'lainnya'){ echo 'selected'; } ?> >Lainnya</option>
                                        
                                                                                                                                     
                                </select>
                                
				                
				</div>

			<!-- 	<div class="form-group">
				                  <label >Kategori Produk</label>				                 
				                      <select class="form-control"  id="inputSuccess" name="kategori_produk" style="width: 15%;">
		                                <option value='' disabled selected>Pilih Kategori</option>
		                                <option value='Tanaman_Pangan' <?php if($varproduk->kategori_produk == 'Tanaman_Pangan'){ echo 'selected'; } ?> >Tanaman Pangan</option>
		                                <option value='Hortikultura' <?php if($varproduk->kategori_produk == 'Hortikultura'){ echo 'selected'; } ?> >Hortikultura</option>
		                                <option value='Peternakan' <?php if($varproduk->kategori_produk == 'Peternakan'){ echo 'selected'; } ?> >Peternakan</option>
		                                <option value='Perkebunan' <?php if($varproduk->kategori_produk == 'Perkebunan'){ echo 'selected'; } ?> >Perkebunan</option>
		                                <option value='Olahan' <?php if($varproduk->kategori_produk == 'Olahan'){ echo 'selected'; } ?> >Olahan</option>
		                              </select>
                </div> -->

                  <div class="form-group">
                  <label>Keterangan</label>
                  <textarea  type="text" name="keterangan" class="form-control" style="width: 100%;"><?php echo $vardonatur->keterangan;?>  </textarea>
                </div>

                

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>

                  <div class="col-sm-10">
                    <img src="<?php echo base_url('assets_frontend/img/dokumentasi/'.$vardonatur->gambar_dokumentasi) ?>" width="150"></br>
                    <input type="checkbox" name="ubah" value="true"> Ceklist jika ingin mengubah gambar<br>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>" type="file" name="gambar_dokumentasi" />
                    <font color="red" >(File bertipe jpg/png/gif/jpeg dengan ukuran maksimal 2 MB)</font>
                      <div class="invalid-feedback">
                          <?php echo form_error('image') ?>
                      </div>
                  </div>
                </div>
 

                 
				              <!-- /.box-body -->
				    <div class="box-footer">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN PERUBAHAN</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="dokumentasi_id" value="<?php echo $vardonatur->dokumentasi_id;?>">         
			        </div>
				              <!-- /.box-footer -->
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 