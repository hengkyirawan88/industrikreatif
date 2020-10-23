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
        <a href="<?php echo base_url().'admin/tani/kios_saprodi/tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a> 
        <br>
        <br>
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Kelola Data Kios Saprodi</h3>
          </div>

                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th>Nama Kios</th>
                              <th>Alamat</th>
                              <th>Pemilik</th>
                              <th>Produk</th>
                              <th>Keterangan</th>
                              <th>Kontak</th>
                              <th>Website</th>
                              <th>Lat</th>
                              <th>Long</th>
                              <th>No SIUP</th>
                              <th>Gambar</th>
                              <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $no = 1;
                              foreach($kios_saprodi as $pp){ 
                            ?>
                            <tr>
                               <td><?php echo $no++; ?>.</td>
                               <td><?php echo $pp->nama_kios; ?></td> 
                               <td><?php echo $pp->alamat_kios; ?></td>
                               <td><?php echo $pp->pemilik_kios; ?></td>
                               <td><?php echo $pp->produk_kios; ?></td>
                               <td><?php echo $pp->keterangan_kios; ?></td>
                               <td><?php echo $pp->kontak_kios; ?></td>
                               <td><?php echo $pp->web_kios; ?></td>
                               <td><?php echo $pp->latitude; ?></td>
                               <td><?php echo $pp->longitude; ?></td>
                               <td><?php echo $pp->no_siup; ?></td>
                               <td><img src='<?=base_url()?>assets_frontend/img/kios_saprodi/<?=$pp->gambar_kios; ?>' style="width: 50px; height: auto;"></td> 
                               <td>
                                <a href="<?php echo base_url().'admin/tani/kios_saprodi/edit/'.$pp->kios_saprodi_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
                                <a href="<?php echo base_url().'admin/tani/kios_saprodi/delete/'.$pp->kios_saprodi_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a> 
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

   