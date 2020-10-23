
	
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
				 
				<a href="<?php echo base_url('admin/ikn_cilacap/kategori') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Kategori</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/kategori/tambah_kategori') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input  type="text" name="nama" class="form-control" placeholder="Isikan nama kategori...."/>
                </div>

               <!--  <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class=" "></i> Julah donasi</label>
                  <textarea class="form-control" name="jumlah" rows="3" placeholder="Enter ..."  ></textarea>
                  <span class="help-block">*Tuliskan jumlah donasi...</span>
                </div> -->
                   

 
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

	 