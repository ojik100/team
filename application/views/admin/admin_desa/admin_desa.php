<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">admin</h4>
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
								<a href="#">admin seluruh desa</a>
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
                                                <th>Name</th>
													<th>username</th>
                                                    <th>desa</th>
                                                    <th>aksi</th>
													
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                <th>Name</th>
													<th>harga</th>
													<th>desa</th>
													<th>aksi</th>
												</tr>
											</tfoot>
											<tbody>
                                                <?php foreach($admin as $b):?>
												<tr>
													<td><?= $b->nama_admin?></td>
													<td><?=$b->username?></td>
													<td><?=$b->nama_desa?></td>
													   <td width="">
											<a href="<?php echo site_url('Barang/edit/'.$b->id_admin) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('Barang/delete/'.$b->id_admin) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-recycle"></i> Hapus</a>
										</td>
												</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						