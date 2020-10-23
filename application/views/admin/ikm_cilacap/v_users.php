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
        <!-- <a href="<?php echo base_url().'admin/ikm_cilacap/statistik/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a>  -->
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Kelola Data Pengguna</h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                               <th>Nama Pengguna</th>
                               <th>Level</th>
                               <th>Username</th>
                               <th>Password</th>
                               <th>Email</th>
                               <th>Jabatan</th>
                               <th>Industri Kreatif</th>
                            
<!--                               <th> IKM Kerajinan</th>
                              <th> IKM Kuliner</th>
                              <th> IKM Fashion</th>
                              <th> IKM Kebudayaan</th>
                              <th> IKM Aksesoris</th>
                              <th> IKM Lainnya</th> -->
                               <th> Aksi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($users_ikm_cilacap as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->nama_user; ?> </td>
                               <td> <?php echo $pp->level; ?> 

                             <?php 
                                if($pp->level == 2)
                                  { echo '(Petugas Lapangan)'; } 
                                else if($pp->level == 3)
                                  { echo '(Industri Kreatif)'; } 
                                else { echo ' '; } 
                                ?></td>
                               <td><?php echo $pp->username; ?> </td>
                               <td><?php echo $pp->password; ?> </td>
                               <td><?php echo $pp->email; ?> </td>
                               <td><?php echo $pp->jabatan; ?> </td>
                               <td><?php echo $pp->judul; ?> </td>
  
                               <td>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/users_ikm_cilacap/edit/'.$pp->user_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                                 <a onclick="return konfirmasi()"href="<?php echo base_url().'admin/ikm_cilacap/users_ikm_cilacap/delete/'.$pp->user_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>  
                              </td>
                            </tr>
                            <?php } ?> <!-- Selesai loop -->
                        </tbody>
                        </table>
                   
                  </div>
        </div>

      </div>
    </div>

  </section>

</div>

    </style>

 <script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("HELLO admin Sikecap, Anda yakin akan menghapus data ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>
