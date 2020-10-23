

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

				<a href="<?php echo base_url('admin/ikm_cilacap/users_ikm_cilacap') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Akun Petugas Lapangan atau Akun Industri Kreatif</h3>
					</div>

					<div class="box-body">
						<p><?php echo $this->session->flashdata('msg') ?></p>
						<form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/users_ikm_cilacap/tambah_lapangan') ; ?>"enctype="multipart/form-data" method="post">

							<div class="box box-warning">

								<!-- /.box-header -->


								<div class="box-body">

									<!-- text input -->


									<div class="form-group">
										<label>Nama Petugas Lapangan / Nama Industri Kreatif</label>
										<input  type="text" name="nama_user" class="form-control" required="" placeholder="Isikan nama ...."/>
									</div>

									<div class="form-group">
										<label>Email pengguna</label>
										<input  type="email" name="email" class="form-control" placeholder=" ...."/>
									</div>

									<div class="form-group">
										<label>Jabatan <i style="color: brown">(khusus petugas lapangan)</i></label>
										<input  type="jabatan" name="jabatan" class="form-control" placeholder=" ...."/>
									</div>
									<div class="form-group">
										<label >Nama IKM <i style="color: brown">(khusus industri kreatif)</i></label>                        
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
										<label>Username*</label>
										<input  type="text" name="username" class="form-control" required="" placeholder=" ...."/>
									</div>


									<div class="form-group">
										<label>Password*</label>
										<input  type="text" name="password" class="form-control" required="" placeholder=" ...."/>
									</div>



									<div class="form-group">
										<label>Level akun</label>
										<select class="form-control" name="level">
											<option value="" disabled="">Pilih Level akun</option>
											<option value="2">Petugas Lapangan</option>
											<option value="3">Industri Kreatif</option>
										</select>
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

