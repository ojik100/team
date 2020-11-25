<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Form Barang</h4>
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
													<th>stok</th>
													<th>status</th>
													<?php if($this->session->userdata('level')==2){?>
													<?php }else{?>
													<th>Nama Supllier</th>
													<?php }?>
													
													<th>Gambar</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                <th>Nama</th>
													
													<th>Stok</th>
													<th>Status</th>
													<?php if($this->session->userdata('level')==2){?>
													<?php }else{?>
													<th>Nama Supllier</th>
													<?php }?>
													
													<th>Gambar</th>
													<th>aksi</th>
												</tr>
											</tfoot>
											<tbody>
                                                <?php foreach($barang as $b):?>
												<tr>
													<td><?= $b->nama_barang?></td>
												
													<td><?=$b->stok?></td>
													<td><?=$b->status?></td>
													<?php if($this->session->userdata('level')==2){?>
													<?php }else{?>
													<td><?=$b->supllier?></td>
													<?php }?>
												
													<td>
											<img src="<?php echo base_url('upload/barang/'.$b->gambar) ?>" width="64" />
										</td>
                                                    
                                                    <td width="">
											<a href="<?php echo site_url('Barang/edit/'.$b->id_barang) ?>"
											 class="btn btn-smal250l"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('Barang/delete/'.$b->id_barang) ?>"
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
						