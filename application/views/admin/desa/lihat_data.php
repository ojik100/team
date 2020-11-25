<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"> Form Pihak Desa</h4>
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
                                                <th>Nama Desa</th>
											
													<th>Kontak Kesehatan</th>
													<th>Kontak Keamanan</th>
													<th>Kontak Kasus</th>
													<th>aksi</th>
												</tr>
											</thead>	
											<tbody>
                                                <?php foreach($pihak_desa as $b):?>
												<tr>
													<td><?php echo $b->nama_desa; ?></td>
													<td><?php echo $b->kontak_kesehatan ?></td>
													<td><?php echo $b->kontak_keamanan ?></td>
													<td><?php echo $b->kontak_khusus ?></td>                                                   
                                                    <td width="">
											<a href="<?php echo site_url('desa/edit/'.$b->id_pihak_desa,) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('desa/hapus/'.$b->id_pihak_desa,) ?>"
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
