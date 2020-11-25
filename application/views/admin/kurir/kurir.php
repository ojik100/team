<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"> Form Data Kurir</h4>
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
												<th>NIK</th>
												<th>Nama</th>
												<th>Poto</th>
												<th>Verified</th>
												</th>
												</tr>
											</thead>
											
											<tbody>
											<?php foreach($kurir as $k):?>
                                            <tr>
											<td><?= $k->nik?></td>
											<td><?= $k->nama?></td>
											<td>
											<img src="<?php echo base_url('upload/kurir/'.$k->photo) ?>" width="64" />
										
											</td>
											<td><?= $k->verified?></td>
											
											<td width="">
											<a href="<?php echo site_url('kurir/edit/'.$k->id_kurir) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('kurir/hapus/'.$k->id_kurir) ?>"
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
