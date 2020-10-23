

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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/statistik') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Edit Bahan baku</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/statistik/update') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              

                <div class="col-lg-6">
                	<div class="form-group">
                  <label>Nama Bahan Baku</label>
                  <input  type="text=" name="nama_bahanbaku" class="form-control" style="width: 40%;" value="<?php echo $varstatistik->nama_bahanbaku;?> "> </input>
                </div>

                <!-- <div class="form-group">
                  <label>Jumlah IKM Kerajinan</label>
                  <input type="text" name="kerajinan" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->kerajinan;?> "> </input>
                </div>

                  <div class="form-group">
                  <label>Jumlah IKM Kuliner</label>
                  <input  type="text" name="kuliner" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->kuliner;?>">  </input>
                </div>

                  <div class="form-group">
                  <label>Jumlah IKM Fashion</label>
                  <input  type="text" name="fashion" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->fashion;?>">  </input>
                </div> -->
</div>
<div class="col-lg-6">
                  <!-- <div class="form-group">
                  <label>Jumlah IKM Aksesoris</label>
                  <input  type="text" name="aksesoris" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->aksesoris;?>">  </input>
                </div>
                 <div class="form-group">
                  <label>Jumlah IKM Kebudayaan</label>
                  <input  type="text" name="kebudayaan" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->kebudayaan;?>">  </input>
                </div>
                 <div class="form-group">
                  <label>Jumlah IKM Lainnya</label>
                  <input  type="text" name="lainnya" class="form-control" style="width: 80%;" value="<?php echo $varstatistik->lainnya;?>  "></input>
                </div> -->
                 <!-- /.box-body -->
				    <div class="form-group">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN PERUBAHAN</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="id_statistik" value="<?php echo $varstatistik->id_statistik ;?>">         
			        </div>
 
				              <!-- /.box-footer -->
				            
			       
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 