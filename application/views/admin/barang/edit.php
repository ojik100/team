
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
									<div class="card-title">Form Edit Barang</div>
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
												<label for="barang">Nama Barang</label>
												<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <input type="hidden" name="id" value="<?php echo $barang->id_barang?>">
												<input type="text" name="nama_barang" value="<?php echo $barang->nama_barang?>" class="form-control" id="barang" placeholder="masukan nama barang">
												
												<input type="hidden" name="id_suplayer" value="<?php echo $barang->id_suplayer?>">
												
											</div>
											<div class="form-group">
												<label for="harga">Harga</label>
												<input type="number" name="harga" value="<?php echo $barang->harga?>" class="form-control" id="harga" placeholder="masukan harga">
                                            </div>
                                            <div class="form-group">
												<label for="harga">Stok</label>
												<input type="number" name="stok" value="<?php echo $barang->stok?>" class="form-control" id="stok" placeholder="masukan stok barang">
                                            </div>
                                            <div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" name="status" value="<?php echo $barang->status?>" id="status">
                                                    <option value="kosong">Kosong</option>
                                                    <option value="tersedia">Tersedia</option>
                                                </select>
											</div>
											<div class="form-group">
												<label for="name">Photo</label>
												<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
												type="file" name="gambar" />
												<input type="hidden" name="old_gambar" value="<?php echo $barang->gambar ?>" />
												<div class="invalid-feedback">
													<?php echo form_error('image') ?>
												</div>
											</div>
										
											<label class="mt-3 mb-3"><b>Keterangan</b></label>
											<div class="form-group form-floating-label">
												<textarea name="keterangan" id="keterangan" cols="85" rows="8"><?php echo $barang->keterangan?>
                                                </textarea>
											</div>

											<div class="form-group">
												<label for="harga">Kategori</label>
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
