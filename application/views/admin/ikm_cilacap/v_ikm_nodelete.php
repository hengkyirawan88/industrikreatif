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
        <!-- <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a>  -->
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">

            <h3 class="box-title">Kelola Data Industri Kreatif  </h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th>Judul</th>
                              <th>Alamat</th>
                              <th>Kategori</th>
                              <th>Produk</th>
                              <th>Bahan&nbsp;Baku</th>
                              <th>Status&nbsp;Verifikasi</th>
                              <th>Gambar</th>
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
                               <td><?php echo $pp->judul; ?></td> 
                               <td><?php echo $pp->alamat; ?></td>
                             <!--   <td><?php echo substr($pp->isi ,0 ,250); ?> ..... dst... </td> -->
                               <td><?php echo $pp->nama; ?></td> 
                               <td><?php echo $pp->produk; ?></td> 
                               <td><?php echo $pp->nama_bahanbaku; ?></td> 
                               <td><?php 
                                if($pp->verifikasi == 0)
                                  { echo '<i class="glyphicon glyphicon-minus" aria-hidden="true" style="color:red"></i> Belum'; } 
                                else { echo '<i class="glyphicon glyphicon-check" aria-hidden="true" style="color:blue"> Sudah</i>'; } 
                                ?></td> 
                               <td style="width: 10%" ><img src="<?=base_url()?>assets_frontend/img/ikm/<?=$pp->gambar; ?> "></td> 

                               <td>
                                <center><a href="<?php echo base_url().'admin/ikm_cilacap/ikm/detail/'.$pp->id_ikm; ?>" class="btn btn-success btn-sm"> <i class="fa fa-book"></i> Detail</a>
                                   <?php if ($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 2) { ?>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/edit/'.$pp->id_ikm; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                                  <?php } ?>

                                   <?php if ($this->session->userdata('level') == 3) { ?>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/ikm/edit_ik/'.$pp->id_ikm; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                                  <?php } ?>
                                </center>
                                
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
