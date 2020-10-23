

<!-- <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=cw0rnrlwng5w782w5cswzjw9wx8b736nvo7al9os6rv8976t"></script>
  	<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyAVQ2aIg5D6B1yyObMTowtn2rYcz6ld0TE&language=in&region=ID&&callback=initMap" type="text/javascript"></script>


  	<style type="text/css">
	body {font:10pt arial; }
	.main { text-align:center; font:12pt Arial; width:100%; height:auto; }
	.eventtext {width:100%; margin-top:20px; font:10pt Arial; text-align:left; line-height:25px; background-color:#EDF4F8;
	padding:5px; border:1px dashed #C2DAE7;}
	#mapa {width:100%; height:340px; border:5px solid #DEEBF2;}
	ul {font:10pt arial; margin-left:0px; padding:5px;}
	li {margin-left:0px; padding:5px; list-style-type:decimal;}
	.code {border:1px dashed #cecece; background-color:#F7F7F7; padding:5px;}
	.small {font:9pt arial; color:gray; padding:2px; }
	.jimi { margin:0px;}
</style> -->

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

				<!-- <a href="<?php echo base_url('admin/ikm_cilacap/ikm') ; ?>" class="btn btn-sm btn-primary">Kembali</a> -->

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<center><h2 class="box-title">Profil lengkap <?php echo $varikm->judul;?></h2></center>
					</div>

					<div class="box-body">
						<p><?php echo $this->session->flashdata('msg') ?></p>


						<div class="box box-warning">

							<!-- /.box-header -->


							<div class="box-body">

								<center><img src="<?php echo base_url('assets_frontend/img/ikm/'.$varikm->gambar) ?>" width="280"></center><br>
								<center>Alamat : <td><?php echo $varikm->alamat;?></td></center>
								<table  class="table table-bordered table-striped" border="2">
									<thead>
										<tr>

											
											<th>Kapasitas produksi</th>
											<th>Kontak</th>
											<th>Ijin Usaha</th>
											<th>Jumlah tenaga kerja</th>
											<th>Bahan&nbsp;Baku</th>
											<th>Kebutuhan&nbsp;Bahan&nbsp;Baku</th>
											


										</tr>
									</thead>
									<tbody>

										<tr>

											 
											<td><?php echo $varikm->kapasitas_produksi;?> / tahun</td>  
											<td><?php echo $varikm->kontak;?></td>
											<!--   <td><?php echo substr($pp->isi ,0 ,250); ?> ..... dst... </td> -->
											<td><?php echo $varikm->ijin_usaha;?></td> 
											<td><?php echo $varikm->jumlah_tk;?></td> 
											<td><?php echo $varikm->nama_bahanbaku;?></td> 

											<td><?php echo $varikm->kebutuhan_bahan_baku;?></td> 
											


										</tr>
										<!-- Selesai loop -->
									</tbody>

									<thead>
										<tr>

											<th>Nilai investasi</th>
											<th>Limbah</th>
											<th>Penjualan</th>
											<th>Kategori</th>
											<th>Produk</th>
											<th>Status Verifikasi</th>
											



										</tr>
									</thead>
									<tbody>

										<tr>

											<td>Rp <?php echo $varikm->nilai_investasi;?>,-</td> 
											<td><?php echo $varikm->limbah;?></td>
											<!--   <td><?php echo substr($pp->isi ,0 ,250); ?> ..... dst... </td> -->
											<td><?php echo $varikm->penjualan;?></td> 

											<td> <?php echo $varikm->nama;?></td>
											<td><?php echo $varikm->produk;?></td> 
											<td><?php 
                                if($varikm->verifikasi == 0)
                                  { echo '<i class="glyphicon glyphicon-minus" aria-hidden="true" style="color:red"></i> Belum'; } 
                                else { echo '<i class="glyphicon glyphicon-check" aria-hidden="true" style="color:blue"> Sudah</i>'; } 
                                ?></td>  





										</tr>
										<!-- Selesai loop -->
									</tbody>
								</table>

							</div>



							
					     </div>



					 </div>

					</div>

				</div>
			</div>

		</section>

	</div>





<style type="text/css">
	
	.table-bordered {
    border: 3px solid #741919;
}
</style>