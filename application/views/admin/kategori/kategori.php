<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kategori</h4>
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
								<a class="btn btn-primary fas fa-plus" href="<?= base_url('kategori/tambah')?>"></a>
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
												<th>Kategori</th>
										
												</th>
												</tr>
											</thead>
											
											<tbody>
											<?php foreach ($kategori as $b) : ?>

												<tr>
												<td><?= $b->kategori ?></td>
													
												<td>
						<?php echo anchor('kategori/hapus/'. $b->id_kategori, '<div class="btn btn-danger fas fa-trash" ></div>')  ?>

						
					</td>
												</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
