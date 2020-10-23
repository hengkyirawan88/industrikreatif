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
        <a href="<?php echo base_url().'admin/ikm_cilacap/dokumentasi/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a> 
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Kelola Data Dokumentasi</h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th>Nama Organisasi</th>
                              <th>Judul Dokumentasi</th>
                              <th>Kategori Dokumentasi</th>
                              <!-- <th>Keterangan</th> -->
                              <th style="width: 10%" >Gambar</th>
                              <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($donatur as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->judul; ?></td>
                               <td><?php echo $pp->judul_dokumentasi; ?></td> 
                               <td><?php echo $pp->kategori_dokumentasi; ?></td> 
                       <!--         <td ><?php echo $pp->keterangan; ?></td>  -->
                               <td style="width: 10px" ><img src="<?=base_url()?>assets_frontend/img/dokumentasi/<?=$pp->gambar_dokumentasi; ?> "></td> 
                               <td>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/dokumentasi/edit/'.$pp->dokumentasi_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                                <a onclick="return konfirmasi()" href="<?php echo base_url().'admin/ikm_cilacap/dokumentasi/delete/'.$pp->dokumentasi_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a> 
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
    width: 75%;
}


   
 </style>

 <script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("HELLO admin Sikecap, Anda yakin akan menghapus data ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>