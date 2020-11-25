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
									<div class="card-title">Form Edit Supplier</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
                                        <?php if ($this->session->flashdata('success')): ?>
											<div class="alert alert-success" role="alert">
												<?php echo $this->session->flashdata('success'); ?>
											</div>
											<?php endif; ?>
                                        <?php echo validation_errors(); ?>
	                                 <form action="" method="post" enctype="multipart/form-data" >
                              
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">Nama Supplier</label>
												<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <input type="hidden" name="id" value="<?= $suplayer->id_suplayer ?>">
                                                <input type="hidden" name="id_desa" value="<?= $suplayer->id_desa?>">
												<input type="text" name="nama" value="<?= $suplayer->nama ?>" class="form-control" >
											
											</div>
											<div class="form-group">
												<label for="">Alamat Suppier</label>
												<input type="text" name="alamat" value="<?= $suplayer->alamat ?>" class="form-control" >
											
												<div class="form-group row">
													<label for="location" class="col-sm-2 col-form-label text-sm-right text-md-right text-lg-right text-xl-right">Pilih Lokasi</label>
													<div class="col-sm-9">
													<div id='map' style="height: 300px"  ></div>
                               
																<div class="form-group">
																<label for="">longitude</label>
																		
																		
																		<textarea id="lng" class="form-control" name="longitude" cols="30" rows="1"><?= $suplayer->longitude ?></textarea>
																</div>
																<div class="form-group">
																<label for="">lattitude</label>
																		
																		
																		<textarea id="lat" class="form-control" name="lattitude" cols="30" rows="1"><?= $suplayer->lattitude ?></textarea>
																</div>
																						
									
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="">Kontak</label>
												<input type="text" name="kontak" value="<?= $suplayer->kontak ?>" class="form-control"  >
											
											</div>
											<div class="form-group">
												<label for="">Email</label>
												<input type="email" name="email" class="form-control" value="<?= $suplayer->email ?>"  placeholder="berugakit@gamail.com" >
											
											</div>
											<div class="form-group">
												<label for="">Username</label>
												<input type="text" name="username" value="<?= $suplayer->username ?>" class="form-control"  >
											
											</div>
											<div class="form-group">
												<label for="">Password</label>
												<input type="password" name="password" class="form-control" value="<?= $suplayer->password ?>" >
											
											</div>
											
								
										</div>
                                        </div>
										
									</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-2">
                                    <button class="btn btn-success">Ubah</button>
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
