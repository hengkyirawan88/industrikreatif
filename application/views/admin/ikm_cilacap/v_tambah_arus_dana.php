
	
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
				 
				<a href="<?php echo base_url('admin/ibnu_abbas/arus_dana') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Arus Dana</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ibnu_abbas/arus_dana/tambah_arus_dana') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

                <div class="form-group">
                  <label>Dana Masuk (juta)</label>
                  <input  type="text" name="jumlah_dana_masuk" class="form-control" placeholder="Isikan jumlsh dana masuk. Ex : 50 ..."/>
                </div>

               <div class="form-group">

                  <label>Dana keluar (juta)</label>
                  <input  type="text" name="jumlah_dana_keluar" class="form-control" style="width: 30%;" placeholder="Isikan jumalh dana keluar ...">
                </div>


                <div class="form-group">
                  <label>Dana Cadangan (juta)</label>
                  <input  type="text" name="jumlah_dana_cadangan" class="form-control" placeholder="Isikan jumlsh dana cadangan...."/>
                </div>

               <div class="form-group">

                  <label>Hutang Pembangunan (juta)</label>
                  <input  type="text" name="jumlah_hutang_pembangunan" class="form-control" style="width: 30%;" placeholder="Isikan jumalh dana hutang pembangunan ...">
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

	 