
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
									<div class="card-title">Form Tambah Barang</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container-fluid">
										<?php if ($this->session->flashdata('success')): ?>
											<div class="alert alert-success" role="alert">
												<?php echo $this->session->flashdata('success'); ?>
											</div>
											<?php endif; ?>
												<?php echo validation_errors(); ?>
										<form action="<?php echo site_url('Barang/create') ?>" method="post" enctype="multipart/form-data" >
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="barang">Nama Barang :</label>
												<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
												<input type="text" name="nama_barang" class="form-control" id="barang" placeholder="masukan nama barang">
												<?php if($this->session->userdata('level')== 2){?>
												<input type="hidden" name="id_suplayer" value="<?php echo $this->session->userdata('id')?>">
												<?php }else if($this->session->userdata('level')== 1){?>
													<input type="hidden" name="id_suplayer" value="0">
												

												<?php }?>
												<div class="invalid-feedback">
														<?php echo form_error('name_barang') ?>
														</div>
											</div>
											<div class="form-group">
												<label for="harga">Harga :</label>
												<input type="number" name="harga" class="form-control" id="harga" placeholder="masukan harga">
												<div class="invalid-feedback">
													<?php echo form_error('harga') ?>
														</div>
											</div>
                                            <div class="form-group">
												<label for="harga">Stok :</label>
												<input type="number" name="stok" class="form-control" id="stok" placeholder="masukan stok barang">
														<div class="invalid-feedback">
														<?php echo form_error('stok') ?>
													</div>
											</div>
                                            <div class="form-group">
												<label for="harga">Status :</label>
												<select class="form-control" name="status" id="">
                                                    <option value="Kosong">Kosong</option>
                                                    <option value="Tersedia">Tersedia</option>
                                                </select>
											</div>
											<div class="form-group">
												<label for="name">Photo :</label>
												<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
												type="file" name="gambar" />
												<div class="invalid-feedback">
													<?php echo form_error('gambar') ?>
												</div>
											</div>
										
											<label class="mt-3 mb-3"><b>Keterangan :</b></label>
											<div class="form-group form-floating-label">
												<textarea name="keterangan" id="keterangan" class="form-control" cols="85" rows="8"></textarea>
											</div>
											<div class="form-group">
												<label for="harga">Kategori :</label>
											
												<select class="form-control" name="id_kategori">
												<option value="">--Pilih--</option>
												<?php foreach($kategori as $k):?>
													
													<option value="<?= $k->id_kategori?>"><?= $k->kategori ?></option>
													<?php endforeach;?>
												
												</select>
												
											</div>
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
