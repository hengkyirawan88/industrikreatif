

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=cw0rnrlwng5w782w5cswzjw9wx8b736nvo7al9os6rv8976t"></script>
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
	</style>

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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/ikm/nodelete_ik') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Edit IKM</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/ikm/update_ik') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
       
              

                <div class="form-group">
                  <label>Judul</label>
                  <textarea  type="text" name="judul" class="form-control" style="width: 100%;"><?php echo $varikm->judul;?>  </textarea>
                </div>


               

                <div class="form-group">
                  <label>Kontak</label>
                  <input  type="text" name="kontak" class="form-control" style="width: 100%;" value="<?php echo $varikm->kontak;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Ijin Usaha</label>
                  <input  type="text" name="ijin_usaha" class="form-control" style="width: 100%;" value="<?php echo $varikm->ijin_usaha;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Jumlah tenaga kerja</label>
                  <input  type="text" name="jumlah_tk" class="form-control" style="width: 100%;" value="<?php echo $varikm->jumlah_tk;?>">  </input>
                </div>

             <!--     <div class="form-group">
                  <label>Bahan Baku</label>
                  <input  type="text" name="bahan_baku" class="form-control" style="width: 100%;" value="<?php echo $varikm->bahan_baku;?>">  </input>
                </div> -->

                <div class="form-group">
				                   <label>Bahan Baku</label>				                 
				                    <select name="bahan_baku" class="form-control" style="width: 25%;">
			                                     <?php 
			                                       foreach($bahan_baku as $bb) {
			                                        if ($bb['id_statistik'] == $varikm->bahan_baku) {
			                                          echo '<option value="'.$bb['id_statistik'].'" selected>'.$bb['nama_bahanbaku'].' </option>';
			                                        } else {
			                                          echo '<option value="'.$bb['id_statistik'].'">'.$bb['nama_bahanbaku'].'</option>';
			                                        }
			                                      }
			                                      ?>
			                        </select>
				                
				</div>

                
                 <div class="form-group">
                  <label>Kebutuhan bahan baku</label>
                  <input  type="text" name="kebutuhan_bahan_baku" class="form-control" style="width: 100%;" value="<?php echo $varikm->kebutuhan_bahan_baku;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Kapasitas produksi</label>
                  <input  type="text" name="kapasitas_produksi" class="form-control" style="width: 100%;" value="<?php echo $varikm->kapasitas_produksi;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Nilai investasi</label>
                  <input  type="text" name="nilai_investasi" class="form-control" style="width: 100%;" value="<?php echo $varikm->nilai_investasi;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Limbah</label>
                  <input  type="text" name="limbah" class="form-control" style="width: 100%;" value="<?php echo $varikm->limbah;?>">  </input>
                </div>

                 <div class="form-group">
                  <label>Penjualan</label>
                  <input  type="text" name="penjualan" class="form-control" style="width: 100%;" value="<?php echo $varikm->penjualan;?>">  </input>
                </div>


                   <div class="form-group">
				                   <label>Kategori</label>				                 
				                    <select name="kategori" class="form-control" style="width: 25%;">
			                                     <?php 
			                                       foreach($kategori as $bb) {
			                                        if ($bb['id'] == $varikm->kategori) {
			                                          echo '<option value="'.$bb['id'].'" selected>'.$bb['nama'].' </option>';
			                                        } else {
			                                          echo '<option value="'.$bb['id'].'">'.$bb['nama'].'</option>';
			                                        }
			                                      }
			                                      ?>
			                        </select>
				                
				</div>

			<!-- 	<div class="form-group">
				                  <label >Kategori Produk</label>				                 
				                      <select class="form-control"  id="inputSuccess" name="kategori_produk" style="width: 100%;">
		                                <option value='' disabled selected>Pilih Kategori</option>
		                                <option value='Tanaman_Pangan' <?php if($varproduk->kategori_produk == 'Tanaman_Pangan'){ echo 'selected'; } ?> >Tanaman Pangan</option>
		                                <option value='Hortikultura' <?php if($varproduk->kategori_produk == 'Hortikultura'){ echo 'selected'; } ?> >Hortikultura</option>
		                                <option value='Peternakan' <?php if($varproduk->kategori_produk == 'Peternakan'){ echo 'selected'; } ?> >Peternakan</option>
		                                <option value='Perkebunan' <?php if($varproduk->kategori_produk == 'Perkebunan'){ echo 'selected'; } ?> >Perkebunan</option>
		                                <option value='Olahan' <?php if($varproduk->kategori_produk == 'Olahan'){ echo 'selected'; } ?> >Olahan</option>
		                              </select>
                </div> -->

                  <div class="form-group">
                  <label>Alamat</label>
                  <textarea  type="text" name="alamat" class="form-control" style="width: 100%;"><?php echo $varikm->alamat;?>  </textarea>
                </div>

                 <div class="form-group">
                  <label>Produk</label>
                  <textarea  type="text" name="produk" class="form-control" style="width: 100%;"><?php echo $varikm->produk;?>  </textarea>
                </div>

                 <div class="form-group">
                  <label>Gambar</label>

                  <div class="col-sm-12">
                    <img src="<?php echo base_url('assets_frontend/img/ikm/'.$varikm->gambar) ?>" width="250"></br>
                    <input type="checkbox" name="ubah" value="true"> Ceklist jika ingin mengubah gambar<br>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>" type="file" name="gambar" />
                    <font color="red" >(File bertipe jpg/png/gif/jpeg dengan ukuran maksimal 2 MB)</font>
                      <div class="invalid-feedback">
                          <?php echo form_error('image') ?>
                      </div>
                  </div>
                </div>

                 <div class="form-group">
				                  <label>Peta Lokasi</label>

				                  <div class="col-sm-12">
				                   <div class="main">
				                    <div style="width:100%; margin:0px auto;">
				                      <div id="mapa"></div>
				                      <div class="eventtext">
				                        <div>Lattitude: <span id="latspan"></span></div>
				                        <div>Longitude: <span id="lngspan"></span></div>
				                        <div>Lat Lng: <span id="latlong"></span></div>
				                        <div style="margin-bottom: 10px;">Latitude:
				                        <input type="text" id="latitude" name="latitude" value="<?php echo $varikm->latitude;?>" style="width:300px; border:1px inset gray;"></span></div>
				                        <div>Longitude:
				                        <input type="text" id="longitude" name="longitude" value="<?php echo $varikm->longitude;?>" style="width:300px; border:1px inset gray;"></span></div>
				                      </div>
				                    </div>
				                  </div>
				                  </div>
				                </div>
				                <div class="form-group">
				                  <!-- <label for="inputEmail3" class="col-sm-2 control-label">Koordinat</label> -->

				                  <div class="col-sm-10">
					                   <script type="text/javascript">
					                    if (GBrowserIsCompatible())
					                    {
					                    map = new GMap2(document.getElementById("mapa"));
					                    map.addControl(new GLargeMapControl());
					                    map.addControl(new GMapTypeControl(3));
					                    map.setCenter( new GLatLng(-7.7267,109.0441), 11,0); 
					                     // map.setCenter( new GLatLng(-7.7272,109.0113), 11,0);

					                    GEvent.addListener(map,'mousemove',function(point)
					                    {
					                    document.getElementById('latspan').innerHTML = point.lat()
					                    document.getElementById('lngspan').innerHTML = point.lng()
					                    document.getElementById('latlong').innerHTML = point.lat() + ', ' + point.lng()
					                    });

					                    GEvent.addListener(map,'click',function(overlay,point)
					                    {
					                    document.getElementById('latitude').value = point.lat() 
					                    document.getElementById('longitude').value = point.lng()
					                    });
					                    }
					                    </script>

					                    <br />
					                    <div style="width:70%; margin:0 auto;"></div>
					                </div>
				           	 	</div>

 

                 
				              <!-- /.box-body -->
				    <div class="box-footer">
			        <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >SIMPAN PERUBAHAN</button>
			        <input type="hidden" class="form-control" id="inputSuccess" name="id_ikm" value="<?php echo $varikm->id_ikm;?>">         
			        </div>
				              <!-- /.box-footer -->
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 



 