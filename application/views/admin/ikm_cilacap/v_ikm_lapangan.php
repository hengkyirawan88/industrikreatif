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
        <!-- <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a> --> 
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Data Petugas Lapangan</h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pilihan&nbsp;Aksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                              <!-- <th>Dana Hutang Pembangunan (juta)</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($ikm as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->username; ?></td> 
                               <td><?php echo $pp->password; ?></td>
                               <td>
                                <center><a href="<?php echo base_url().'admin/ikm_cilacap/ikm/edit_verifikasi/'.$pp->id_ikm; ?>" class="btn btn-success btn-sm"> <i class="fa fa-pencil"></i> Verifikasi</a></center>
                              <a onclick="return konfirmasi()"href="<?php echo base_url().'admin/ikm_cilacap/ikm/delete/'.$pp->id_ikm; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>  
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
 

 <style type="text/css">
   img {
    vertical-align: middle;
    width: 45%;
}




 </style>

 <script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("HELLO admin Sikecap, Anda yakin akan menghapus data ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>
