
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
									<div class="card-title">Info Harga Sembako</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
										<?php foreach($harga as $u){ ?>
										<?php echo form_open('Harga/aksi_edit');   ?> 
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">Nama Barang</label>
												<input type="hidden" name="id" class="form-control" id="" placeholder="Nama Barang" value="<?php echo $u->nama_barang ?>">
												<input type="text" name="nama_barang" class="form-control" id="" placeholder="Nama Barang" value="<?php echo $u->nama_barang ?>">
										</div>
										
										<div class="form-group">
												<label for="">Harga</label>
												<input type="text" name="harga" class="form-control" id="" placeholder="Harga" value="<?php echo $u->harga ?>">
										</div>
										<div class="form-group">
												<label for="">Keterngan</label>
												<textarea type="text" name="keterangan" class="form-control" id="" placeholder="Keterangan"> <?php echo $u->keterangan ?></textarea>
											
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
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
