<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Form User</h4>
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
											
													<th>verified</th>
													<th>Aksi</th>
												
												</tr>
											</thead>
											
											<tbody>
												<?php foreach($user as $s):?>
                                            <tr>
										
											<td><?= $s->nama?></td>
										
										
										
											<td><?php if($s->verified == 0){
												echo 'tidak aktif';}else{
													echo 'aktif';
												}
												?></td>
										<td >
										<a href="<?php echo site_url('User/status/'.$s->id) ?>"
											 class="btn btn-smal250l"><i class="fas fa-bell"></i> Aktif</a>
										<a href="<?php echo site_url('User/detail/'.$s->id) ?>"
											 class="btn btn-smal250l"><i class="fas fa-th"></i> Detail</a>
											<a href="<?php echo site_url('User/edit/'.$s->id) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('User/delete/'.$s->id) ?>"
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
						
						
