
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
									<div class="card-title">Kategori</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
									
										<form action="<?php echo site_url('kategori/aksi_tambah') ?>" method="post"  >
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">Nama Kategori</label>
												<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
												<input type="text" name="kategori" class="form-control" id="" placeholder="Nama Kategori">
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
