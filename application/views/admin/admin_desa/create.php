
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
									<div class="card-title">create admin</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
									
										<form action="<?php echo site_url('admin_desa/create') ?>" method="post">
                                            
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
                                                <label for="">nama</label>
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                                                <input type="text" name="nama_admin" class="form-control" id="" value="<?php $this->input->post('nama_admin')?>" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
												<label for="">username</label>
                                                <input type="text" name="username" class="form-control" id="" value="<?php $this->input->post('username')?>" placeholder="username">
                                            </div>
                                            <div class="form-group">
												<label for="">password</label>
                                                <input type="password" name="password" class="form-control" id="" placeholder="password">
                                            </div>
                                            <div class="form-group">
												<label for="">desa</label>
                                                <select class="form-control" name="id_desa">
                                                    <option >- pili desa -</option>
                                                    <?php foreach($desa as $d):?>
                                                    <option value="<?= $d->id_desa?>"><?= $d->nama_desa?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
										
									</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-2">
                                    <button class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
                                    </div>
									
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
