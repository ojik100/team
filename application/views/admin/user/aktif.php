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
					
							
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"></div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
										<?php foreach($user as $u){ ?> 
										<form action="<?php echo site_url('User/status_update') ?>" method="post"  >
                              
									
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
										<input type="hidden" name="id"   value="<?php echo $u->id ?> ">
										
											<div class="form-group">
												<label for="">Aktif</label>
												<select class="form-control" name="aktif" >
                                                    <option value="0">Tidak Aktif</option>
                                                    <option value="1">Aktif</option>
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
                                    <button class="btn btn-success">Aktif</button>
									<button class="btn btn-danger">Cancel</button>
                                    </div>
									
                                </div>
                            </form>
							<?php } ?>
						
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/maps/scripts')?>
