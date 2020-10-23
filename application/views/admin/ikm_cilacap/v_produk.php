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
          <a href="<?php echo base_url().'admin/ikm_cilacap/produk/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a>  
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Kelola Data produk </h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                               <th>Nama Produk</th>
                              <th> Kategori Produk</th>
                              <th> Nama Industri Kreatif</th>
                              <th> Gambar</th>
                               <th> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($produk as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->nama; ?> </td> 
                               <td><?php echo $pp->nama_kategoriproduk; ?> </td> 
                               <td><?php echo $pp->judul; ?> </td> 
                               <td> <img src="<?php echo base_url().'assets_frontend/img/ikm/'.$pp->gambar_produk;?>" style="width: 100px;height: 100px;"></td>
                               <td>
                                <a href="<?php echo base_url().'admin/ikm_cilacap/produk2/edit/'.$pp->id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                             <?php if ($this->session->userdata('level') == 1) {?>  <a onclick="return konfirmasi()"href="<?php echo base_url().'admin/ikm_cilacap/produk2/delete/'.$pp->id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>   
                              <?php } ?>
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