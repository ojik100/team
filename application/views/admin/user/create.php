<!-- ecoderr -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
type="text/css"
/>
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

<!-- coderrr -->


			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Tambah User</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
                                        <?php echo validation_errors(); ?>
	                                    <?php echo form_open('user/create'); ?>
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">NIK</label>
												<input type="number" name="nik" value="<?php echo $this->session->userdata('nik')?>" class="form-control" >
											</div>
											<div class="form-group">
												<label for="">Nama</label>
												<input type="text" name="nama" class="form-control" >
											</div>
											<div class="form-group">
												<label for="">Jenis Kelamin</label>
												<select class="form-control" name="jk" id="">
                                                    <option value="l">L</option>
                                                    <option value="p">P</option>
                                                </select>
											</div>
											<!-- <div class="form-group">
												<label for="">Umur</label>
												<input type="number" name="umur" class="form-control"  >
											
											</div> -->
											<div class="form-group">
												<label for="">Alamat</label>
												<input type="text" name="alamat" class="form-control"  >
											
											</div>
											<div class="form-group row">
													<label for="location" class="col-sm-2 col-form-label text-sm-right text-md-right text-lg-right text-xl-right">Pilih Lokasi</label>
													<div class="col-sm-9">
													<div id='map' style="height: 300px" ></div>
                               
																<div class="form-group">
																<label for="">longtitude</label>
																		
																		
																		<textarea id="lng" class="form-control" name="longitude" cols="30" rows="1"></textarea>
																</div>
																<div class="form-group">
																<label for="">langtitude</label>
																		
																		
																		<textarea id="lat" class="form-control" name="lattitude" cols="30" rows="1"></textarea>
																</div>
																						
									
													</div>
												</div>
											<div class="form-group">
												<label for="">Desa</label>
												<input type="text" name="desa" class="form-control"  >
											
											</div>
											<div class="form-group">
												<label for="">Kecamatan</label>
												<input type="text" name="kecamatan" class="form-control"  >
											

											</div>
											<div class="form-group">
												<label for="">Kabupaten</label>
												<input type="text" name="kabupaten" class="form-control"  >
												<input type="hidden" name="aktif" value="0">
											
											</div>
											<div class="form-group">
												<label for="">Telepon</label>
												<input type="number" name="telpon" class="form-control"  >
												
											
											</div>
											<div class="form-group">
												<label for="">Email</label>
												<input type="email" name="email" class="form-control"  >
												
											
											</div>
											<div class="form-group">
												<label for="">Status Nikah</label>
												<select class="form-control" name="status_nikah" >
                                                    <option value="nikah">Nikah</option>
                                                    <option value="belum">Belum Nikah</option>
                                                </select>
											</div>

											<!-- <div class="form-group">
												<label for="">Status Nikah</label>
												<select class="form-control" name="status_nikah" id="">
                                                    <option value="nikah">aktif</option>
                                                    <option value="belum">Belum Nikah</option>
                                                </select>
											</div> -->
										
										</div>
                                        </div>
										
									</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-2">
                                    <button class="btn btn-success">Simpan</button>
									<button class="btn btn-danger">Batal</button>
                                    </div>
									
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/maps/scripts')?>
