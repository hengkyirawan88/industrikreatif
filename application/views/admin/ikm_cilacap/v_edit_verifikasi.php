

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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/ikm/verifikasi') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Verifikasi Industri Kreatif</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/ikm/update_verifikasi') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              


                <div class="form-group">
				                  <label >Industri Kreatif <?php echo $varikm->judul;?></label>				                 
				                      <select class="form-control"  id="inputSuccess" name="verifikasi" style="width: 100%;">
		                                <option value='' disabled selected>Pilih Status Verifikasi</option>
		                                <option value='1' <?php if($varikm->verifikasi == '1'){ echo 'selected'; } ?> >Iya</option>
		                                <option value='0' <?php if($varikm->verifikasi == '0'){ echo 'selected'; } ?> >Tidak</option>
		                                
		                              </select>
                </div>

                
</div>
<div class="col-lg-6">
                
				    <div class="form-group">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN VERIFIKASI</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="id_ikm" value="<?php echo $varikm->id_ikm ;?>">         
			        </div>
 
				              <!-- /.box-footer -->
				            
			       
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 