
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
									<div class="card-title">Form Edit Desa</div>
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
										<?php foreach($pihak_desa as $u){ ?> 
											<?php echo form_open('desa/update'); ?>           
                                      
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
										<input type="hidden" name="id_pihak_desa" class="form-control" id="" placeholder="Telepon" value="<?php echo $u->id_pihak_desa ?>">
											
										<div class="form-group">
												<label for="">Nama Desa</label>
												<select class="form-control"  name="id_desa" id="">
													<option value="">- pilih desa -</option>
													<?php foreach($desa as $d):?>
													<option value="<?= $d->id_desa?>"><?= $d->nama_desa?></option>
													<?php endforeach;?>
												</select>
												<div class="invalid-feedback">
						
											</div>

											<div class="form-group">
												<label for="">Alamat</label>
												<textarea type="text" name="alamat" class="form-control" id="" placeholder="ALamat"><?php echo $u->alamat_kantor ?></textarea>
												<div class="invalid-feedback">
						
											</div>
										</div>
											<div class="form-group">
												<label for="">Telepon</label>
												<input type="text" name="telpon" class="form-control" id="" placeholder="Telepon" value="<?php echo $u->telpon ?>">
												<div class="invalid-feedback">
						
											</div>
											</div>
											<div class="form-group">
												<label for="">Email</label>
												<input type="text" name="email" class="form-control" id="" placeholder="Email" value="<?php echo $u->email ?>">
												<div class="invalid-feedback">
						
											</div>
											</div>
											<div class="form-group">
												<label for="">Kontak Kesehatan</label>
												<input type="text" name="kontak_kesehatan" class="form-control" id="" placeholder="Kontak Kesehatan" value="<?php echo $u->kontak_kesehatan ?>">
												<div class="invalid-feedback">
						
											</div>
											
											</div>
											<div class="form-group">
												<label for="">Kontak Keamanan</label>
												<input type="text" name="kontak_keamanan" class="form-control" id="" placeholder="Kontak Keamanan" value="<?php echo $u->kontak_keamanan ?>">
												<div class="invalid-feedback">
						
											</div>

											</div>
											<div class="form-group">
												<label for="">Kontak Khusus</label>
												<input type="text" name="kontak_khusus" class="form-control" id="" placeholder="Kontak Khusus" value="<?php echo $u->kontak_khusus ?>">
												<div class="invalid-feedback">
						
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
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
