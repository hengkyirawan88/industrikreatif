
	
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
						<h3 class="box-title">Form Tambah produk</h3>
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
				                <select id="kategori_produk" class="form-control" name="kategori" style="width: 15%;">
                                    <option value="">Pilih Kategori Produk</option> 
                                    <option value="xxx">xxx</option>
                                    <option value="yyyzzz">yyyzzz</option>
                                    <option value="zzz">zzz</option>                                                                                                     
                                </select>
                                
				                
				</div>
<table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                               <th>Nama Produk</th>
                              <th> Kategori</th>
                              <th> Gambar</th>
                               <th> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($produk as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->nama; ?> </td> 
                               <td><?php echo $pp->kategori; ?> </td> 
                               <td> <img src="<?php echo base_url().'assets_frontend/img/ikm/'.$pp->gambar;?>" style="width: 30px;height: auto;"></td>
                               <td>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/produk/edit/'.$pp->id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                              <a onclick="return konfirmasi()"href="<?php echo base_url().'admin/ikm_cilacap/produk2/delete/'.$pp->id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>   
                              </td>
                            </tr>
                            <?php } ?> <!-- Selesai loop -->
                        </tbody>
			<div class="form-group">
				                  <label >Industri Kreatif</label>	

				                 			                 
	                    <select class="form-control"  id="inputSuccess" name="kode_ikm" style="width: 15%;">
	                                    <option value=''>Pilih Industri</option>
	                                      <?php 
	                                        foreach ($ikm as $pp) {  
	                                          // echo "<option value='".$pp['id_ikm']."'>".$pp['judul']."</option>";
	                                        	echo $pp['judul'];
	                                        }
	                                      ?>				                                      
	                                  </select>
				                
				</div>

				 <div class="form-group">
				  <label for="inputEmail3"  >Gambar*</label>
				  <input type="file" name="gambar" /></br>
				  <span class="help-block">*Isikan Gambar Produk </span>
				  <font color="red" >(File bertipe jpg/png/gif dengan ukuran maksimal 2 MB)</font>
				</div>
                   

 
				              <!-- /.box-body -->
				    <div class="box-footer">
				    <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >Simpan</button>
				  <input type="hidden" class="form-control" id="inputSuccess" name="id">  
				    </div>
				              <!-- /.box-footer  
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 