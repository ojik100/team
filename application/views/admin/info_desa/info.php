<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Info Desa</h4>
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
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
                    </div>
					</div>
					
                    <div class="col-md-12 mt--4">
							<div class="card">
							
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
												<th>Tanggal Jam Berita</th>

												<th>Judul</th>
												<th>Gambar</th>
												</th>
												</tr>
											</thead>
											
											<tbody>
											<?php foreach ($info as $b) : ?>
												<tr>
												<td><?= $b->time ?></td>
												<td><?= $b->judul ?></td>
												<td>
											<img src="<?php echo base_url('upload/info/'.$b->gambar) ?>" width="64" />
										</td>
												
												<?php if($this->session->userdata('level')== 2){?>
													
												<?php }else{?>
												<td><a href="<?php echo site_url('info_desa/edit/'.$b->id_info) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('info_desa/delete/'.$b->id_info) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-recycle"></i> Hapus</a>
												<?php }?>
						
												</td>
												</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
