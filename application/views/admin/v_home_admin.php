 
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
      <div class="col-lg-6">
        
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Dashboard</h3>
          </div>
          <div class="box-body">
            <?php if ($this->session->userdata('level') == 1) {?>
            <h3>Selamat datang di halaman super admin ! </h3>
            <?php } ?>

            <?php if ($this->session->userdata('level') == 2) {?>
            <h3>Selamat datang di halaman admin petugas lapangan ! </h3>
            <?php } ?>

            <?php if ($this->session->userdata('level') == 3) {?>
            <h3>Selamat datang di halaman admin Industri Kreatif ! </h3>
            <?php } ?>

            <div class="table-responsive">
             <!--  <table class="table table-bordered table-hover">
                <tr>
                  <th width="%">Nama</th>
                  <th width="1px">:</th>
                  <td>
                    <p><?php echo $this->session->userdata('nama_user') ?></p>
                  </td>
                </tr>
                <tr>
                  <th width="20%">Username</th>
                  <th width="1px">:</th>
                  <td><?php echo $this->session->userdata('username') ?></td>
                </tr>
                
                <tr>
                  <th width="20%">Level dan Status</th>
                  <th width="1px">:</th>
                  <td>Level : <?php echo $this->session->userdata('level') ?>,  Status : Aktif</td>
                </tr>


                <tr>
                  <th width="20%">Jabatan</th>
                  <th width="1px">:</th>
                  <td><?php echo $this->session->userdata('jabatan') ?></td>
                </tr>
              </table> -->
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

</div>
   