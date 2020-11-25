<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Form Suplier</h4>
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
                                                <th>Nama</th>
													<th>Alamat</th>
													<th>Kontak</th>
													<th>aksi</th>
												
												</tr>
											</thead>
											
											<tbody>
												<?php foreach($sup as $s):?>
                                            <tr>
											<td><?= $s->nama?></td>
											<td><?= $s->alamat?></td>
											<td><?= $s->kontak?></td>
											<td width="">
											<a href="<?php echo site_url('Supplier/edit/'.$s->id_suplayer) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('Supplier/delete/'.$s->id_suplayer) ?>"
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
