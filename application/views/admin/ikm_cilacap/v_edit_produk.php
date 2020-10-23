



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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/produk') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Edit Produk</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/produk2/update') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              

                <div class="form-group">
                  <label>Judul</label>
                  <textarea  type="text" name="nama" class="form-control" style="width: 100%;"><?php echo $varproduk->nama;?>  </textarea>
                </div>


      
		     <div class="form-group">
				                   <label>Kategori Produk</label>				                 
				                    <select name="kategori_produk" class="form-control" style="width: 25%;">
			                                        <?php 
			                                       foreach($kategoriproduk as $bb) {
			                                        if ($bb['id_kategoriproduk'] == $varproduk->kategori_produk) {
			                                          echo '<option value="'.$bb['id_kategoriproduk'].'" selected>'.$bb['nama_kategoriproduk'].' </option>';
			                                        } else {
			                                          echo '<option value="'.$bb['id_kategoriproduk'].'">'.$bb['nama_kategoriproduk'].'</option>';
			                                        }
			                                      }
			                                      ?>
			                        </select>
				                
				</div> 


                

                 <div class="form-group">
                  <label>Gambar</label>

                  <div class="col-sm-12">
                    <img src="<?php echo base_url('assets_frontend/img/ikm/'.$varproduk->gambar_produk) ?>" width="250"></br>
                    <input type="checkbox" name="ubah" value="true"> Ceklist jika ingin mengubah gambar<br>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>" type="file" name="gambar_produk" />
                    <font color="red" >(File bertipe jpg/png/gif/jpeg dengan ukuran maksimal 2 MB)</font>
                      <div class="invalid-feedback">
                          <?php echo form_error('image') ?>
                      </div>
                  </div>
                </div>

                 

                 
				              <!-- /.box-body -->
				    <div class="box-footer">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN PERUBAHAN</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="id" value="<?php echo $varproduk->id;?>">         
			        </div>
				              <!-- /.box-footer -->
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 