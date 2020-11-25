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
						
						<ul class="breadcrumbs">

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Detail User</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
										<div class="col-md-6">
									
											<div class="container">
  												<div class="row">
													<div class="col-sm">
													<label for="">Username </label><BR>
													<label for="">Nama Lengkap </label><BR>		
													<label for="">Jenis Kelamin </label><BR>
													
													<label for="">Alamat </label><BR>
													<label for="">Desa </label><BR>
													<label for="">No Telepon </label><BR>
													<label for="">Alamat Email </label><BR>
													<label for="">Kecamatan </label><BR>	
													<label for="">Kabupaten </label><BR>
													<label for="">Status Nikah </label><BR>
													<label for="">Longitude </label><BR>
													<label for="">Lattitude </label><BR>
													<label for="">verified </label><BR>
													

														</div>
  														  <div class="col-sm">
															<b><td><?= $user->nik?></td></b><BR>
															<b><td><?= $user->nama?></td></b><BR>
															<b><td><?= $user->jk?></td></b><BR>
														
															<b><td><?= $user->alamat?></td></b><BR>
															<b><td><?= $user->desa?></td></b><BR>
															<b><td><?= $user->telpon?></td></b><BR>
															<b><td><?= $user->email?></td></b><BR>
															<b><td><?= $user->kecamatan?></td></b><BR>
															<b><td><?= $user->kabupaten?></td></b><BR>
															<b><td><?= $user->status_nikah?></td></b><BR>
															<b><td><?= $user->longitude?></td></b><BR>
															<b><td><?= $user->lattitude?></td></b><BR>
															<b><td><?php if($user->verified == 0){
												echo 'tidak aktif';}else{
													echo 'aktif';
												}
												?></td></b><BR>
															
    														</div>
    													</div>
													</div>
										
										
									
										</div>
										</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-">
                                    
								<a href="<?= base_url('User')?>" class="btn btn-info">Selesai</a>
                                    </div>
									
                                </div>
                            </form>
						
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/maps/scripts')?>
