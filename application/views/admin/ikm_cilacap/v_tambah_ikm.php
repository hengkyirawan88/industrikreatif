
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
				 
				<a href="<?php echo base_url('admin/ikm_cilacap/ikm') ; ?>" class="btn btn-sm btn-primary">Kembali</a>

				<br>
				<br>
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Industri Kreatif</h3>
					</div>
						 
			            <div class="box-body">
					      <p><?php echo $this->session->flashdata('msg') ?></p>
		                  <form class="form-horizontal" role="form" action="<?php echo base_url('admin/ikm_cilacap/ikm/tambah_ikm') ; ?>"enctype="multipart/form-data" method="post">
             
             <div class="box box-warning">
             
            <!-- /.box-header -->
             

            <div class="box-body">
               
                <!-- text input -->
            

                <div class="form-group has-success">
                  <label>Nama IKM</label>
                  <input  type="text" name="judul" class="form-control" placeholder="Isikan Nama Ikm...."/>
                </div>

                   		<div class="form-group has-success">
                          <label >Kategori Industri Kreatif</label>                        
                            <select class="form-control"  id="inputSuccess" name="kategori" style="width: 15%;">
                                            <option value=''>Pilih</option>
                                              <?php 
                                                foreach ($kategori as $pp) {  
                                                  echo "<option value='".$pp['id']."'>".$pp['nama']."</option>";
                                                }
                                              ?>                                              
                                          </select>
                        
        </div>

                <div class="form-group has-success">
                  <label class="control-label" for="inputWarning"><i class=" "></i> Alamat IKM*</label>
                  <textarea class="form-control" name="alamat" rows="3" placeholder="Isikan ..."  ></textarea>
                  <span class="help-block">*Tuliskan alamat lengkap</span>
                </div>

                <div class="form-group has-success">
                  <label class="control-label" for="inputWarning"><i class=" "></i> Isi produk IKM*</label>
                  <textarea class="form-control" name="produk" rows="3" placeholder="Isikan ..."  ></textarea>
                  <span class="help-block">*Tuliskan tentang produk IKM yg dijual</span>
                </div>

                <div class="form-group has-success">
                  <label>Kontak Person</label>
                  <input   style="width: 15%;" type="text" name="kontak" class="form-control" placeholder="Isikan Telp Ikm...."/>
                </div>

                <div class="form-group has-success">
                  <label>Ijin Usaha</label>
                  <input   style="width: 50%;" type="text" name="ijin_usaha" class="form-control" placeholder="Isikan Ijin Usaha...."/>
                </div>

                  <div class="form-group has-success">
                  <label>Jumlah Tenaga Kerja</label>
                  <input   style="width: 15%;" type="text" name="jumlah_tk" class="form-control" placeholder="Isikan Jumlah tenaga kerja...."/>
                </div>
   		<div class="form-group has-success">
                          <label >Bahan Baku</label>                        
                            <select class="form-control"  id="inputSuccess" name="bahan_baku" style="width: 15%;">
                                            <option value=''>Pilih</option>
                                              <?php 
                                                foreach ($bahan_baku as $pp) {  
                                                  echo "<option value='".$pp['id_statistik']."'>".$pp['nama_bahanbaku']."</option>";
                                                }
                                              ?>                                              
                                          </select>
                        
        </div>

                  <div class="form-group has-success">
                  <label>Kebutuhan Bahan Baku (kg/bulan)</label>
                  <input   style="width: 50%;" type="text" name="kebutuhan_bahan_baku" class="form-control" placeholder="tuliskan angka saja tanpa titik"/>
                </div>

                  <div class="form-group has-success">
                  <label>Kapasitas Produksi (kg/bulan)</label>
                  <input   style="width: 50%;" type="text" name="kapasitas_produksi" class="form-control" placeholder="tuliskan angka saja tanpa titik"/>
                </div>

                  <div class="form-group has-success">
                  <label>Nilai investasi</label>
                  <input   style="width: 20%;" type="text" name="nilai_investasi" class="form-control" placeholder="...."/>
                </div>

                  <div class="form-group has-success">
                  <label>Limbah perusahaan</label>
                  <input   style="width: 50%;" type="text" name="limbah" class="form-control" placeholder="...."/>
                </div>

                  <div class="form-group has-success">
                  <label>Penjualan</label>
                  <input   style="width: 15%;" type="text" name="penjualan" class="form-control" placeholder="...."/>
                </div>

               <!--  <div class="form-group has-success">
                  <label>Tanggal berdiri</label>
                  <input  style="width: 15%;" type="date" name="tanggal" class="form-control" placeholder="Isikan Telp Ikm...."/>
                </div> -->


                 <div class="form-group has-success">
				  <label for="inputEmail3"  >Gambar*</label>
				  <input type="file" name="gambar" /></br>
				  <span class="help-block">*Isikan Gambar IKM </span>
				  <font color="red" >(File bertipe jpg/png/gif dengan ukuran maksimal 2 MB)</font>
				</div>

              <div class="form-group has-success">
				                  <label for="inputEmail3" class="col-sm-2 control-label">Peta Lokasi</label>

				                  <div class="col-sm-10">
				                   <div class="main">
				                    <div style="width:100%; margin:0px auto;">
				                      <div id="mapa"></div>
				                      <div class="eventtext">
				                        <div>Lattitude: <span id="latspan"></span></div>
				                        <div>Longitude: <span id="lngspan"></span></div>
				                        <div>Lat Lng: <span id="latlong"></span></div>
				                        <div style="margin-bottom: 10px;">Latitude:
				                        <input type="text" id="latitude" name="latitude" style="width:300px; border:1px inset gray;"></span></div>
				                        <div>Longitude:
				                        <input type="text" id="longitude" name="longitude" style="width:300px; border:1px inset gray;"></span></div>
				                      </div>
				                    </div>
				                  </div>
				                  </div>
				                </div>
				                <div class="form-group has-success">
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
				    <button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;" >Simpan</button>
				    <!-- <input type="hidden" class="form-control" id="inputSuccess" name="kios_saprodi_id"> -->
				    </div>
				              <!-- /.box-footer -->
				            
			        </div>
			       </form>
				</div>

			</div>
		</div>

	</section>

</div>

	 