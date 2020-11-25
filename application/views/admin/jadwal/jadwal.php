
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
									<div class="card-title">Kelola Jadwal Pemesanan</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
									    <?php echo validation_errors(); ?>
	                                    <?php echo form_open('jadwal/aksi'); ?>           
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">Jam Pesan</label>
												<input type="time" name="jam_pesan" class="form-control" id="">
												<input type="hidden" name="id_suplayer" value="<?php echo $this->session->userdata('id')?>">
															
										</div>
										<div class="form-group">
												<label for="">Jam Pengepulan</label>
												<input type="time" name="jam_pengepulan" class="form-control" id="">
										</div>
										<div class="form-group">
												<label for="">Jam Pengiriman</label>
												<input type="time" name="jam_pengiriman" class="form-control" id="">
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
