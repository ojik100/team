<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Harga Sembako</h4>
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
												<th>ID</th>
												<th>Nama Barang</th>
													
										
												<th>Harga</th>
										
												<th>Keterangan</th>
										
												<th>Aksi</th>
										
												</th>
												</tr>
											</thead>
											
											<tbody>
											<?php foreach ($harga as $b) : ?>

<tr>

<td><?= $b->id ?></td>

<td><?= $b->nama_barang ?></td>
<td><?= $b->harga ?></td>
<td><?= $b->keterangan ?></td>
	
<td>
<?php echo anchor('harga/hapus/'. $b->id, '<div class="btn btn- fas fa-trash" ></div>')  ?> ||
<?php echo anchor('harga/edit/'. $b->id, '<div class="btn btn- fas fa-edit" ></div>')  ?>


</td>
</tr>
<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
