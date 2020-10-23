

 

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
						<h3 class="box-title">Form Edit Akun Pengguna Aplikasi</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/users_ikm_cilacap/update') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              

                <div class="form-group">
                  <label>Nama</label>
                  <textarea  type="text" name="nama_user" class="form-control" style="width: 100%;"><?php echo $varusers->nama_user;?>  </textarea>
                </div>


               
 

                 <div class="form-group">
                  <label>Username</label>
                  <input  type="text" name="username" class="form-control" style="width: 100%;" value="<?php echo $varusers->username;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Password</label>
                  <input  type="text" name="password" class="form-control" style="width: 100%;" value="<?php echo $varusers->password;?>">  </input>
                </div>

 

                
                 <div class="form-group">
                  <label>Email</label>
                  <input  type="text" name="email" class="form-control" style="width: 100%;" value="<?php echo $varusers->email;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Jabatan</label>
                  <input  type="text" name="jabatan" class="form-control" style="width: 100%;" value="<?php echo $varusers->jabatan;?>">  </input>
                </div>

                



			<div class="form-group">
				                  <label >Level</label>				                 
				                      <select class="form-control"  id="inputSuccess" name="level" style="width: 100%;">
		                                <option value='' disabled selected>Pilih Level</option>
		                                <option value='1' <?php if($varusers->level == '1'){ echo 'selected'; } ?> >1 (Super admin)</option>
		                                <option value='2' <?php if($varusers->level == '2'){ echo 'selected'; } ?> >2 (petugas lapangan)</option>
		                                <option value='3' <?php if($varusers->level == '3'){ echo 'selected'; } ?> >3 (Industri Kreatif)</option>
		                              
		                              </select>
                </div> 
 

                </div>

              
				               

 

                 
				              <!-- /.box-body -->
				    <div class="box-footer">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN PERUBAHAN</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="user_id" value="<?php echo $varusers->user_id;?>">         
			        </div>
				              <!-- /.box-footer -->
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 