
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
									<div class="card-title">Form Tambah Desa</div>
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
										<form action="<?php echo site_url('desa/aksi_tambah') ?>" method="post"  >
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">Nama Desa</label>
												<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
												<select class="form-control"  name="id_desa" id="">
													<option value="">- pilih desa -</option>
													<?php foreach($desa as $d):?>
													<option value="<?= $d->id_desa?>"><?= $d->nama_desa?></option>
													<?php endforeach;?>
												</select>
												<div class="invalid-feedback">
						
											</div>
										</div>
										
										<div class="form-group">
												<label for="">kepala desa</label>
												<input type="text" name="kepala_desa" class="form-control">
												<div class="invalid-feedback">
						
											</div>
										</div>
										<div class="form-group">
												<label for="">sekdes</label>
												<input type="text" name="sekdes" value="<?= set_value('sekdes')?>" class="form-control">
												<div class="invalid-feedback">
						
											</div>
										</div>
										<div class="form-group">
												<label for="">kamtibmas</label>
												<input type="text" name="kamtibmas" value="<?= set_value('kamtibmas')?>" class="form-control">
												<div class="invalid-feedback">
						
											</div>
										</div>

											<div class="form-group">
												<label for="">Alamat</label>
												<textarea type="text" name="alamat_kantor" class="form-control" id="" placeholder="ALamat"></textarea>
												<div class="invalid-feedback">
						
											</div>
										</div>
											<div class="form-group">
												<label for="">Telepon</label>
												<input type="text" name="telpon" class="form-control" id="" placeholder="Telepon">
												<div class="invalid-feedback">
						
											</div>
											</div>
											<div class="form-group">
												<label for="">Email</label>
												<input type="text" name="email" class="form-control" id="" placeholder="Email">
												<div class="invalid-feedback">
						
											</div>
											</div>
											<div class="form-group">
												<label for="">Kontak Kesehatan</label>
												<input type="text" name="kontak_kesehatan" class="form-control" id="" placeholder="Kontak Kesehatan">
												<div class="invalid-feedback">
						
											</div>
											
											</div>
											<div class="form-group">
												<label for="">Kontak Keamanan</label>
												<input type="text" name="kontak_keamanan" class="form-control" id="" placeholder="Kontak Keamanan">
												<div class="invalid-feedback">
						
											</div>

											</div>
											<div class="form-group">
												<label for="">Kontak Khusus</label>
												<input type="text" name="kontak_khusus" class="form-control" id="" placeholder="Kontak Khusus">
												<div class="invalid-feedback">
						
											</div>
											<div class="form-group">
												<label for="">Tentang desa</label>
												<textarea class="form-control" name="tentang_desa" id="" cols="30" rows="10"></textarea>
												<div class="invalid-feedback">
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
