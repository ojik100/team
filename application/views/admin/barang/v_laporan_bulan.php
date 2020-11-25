<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Laporan Bulan </h4>
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
								<a href="<?= base_url('laporan/pdf')?>">Cetak</a>
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
                                                <th>Nama Barang</th>
													
                                                    <th>Jumlah</th>
                                                    <th>Tanggal Pesan</th>
													<th>Total</th>
													
											</thead>
											<tfoot>
												<tr>
                                               
												
													<th>Nama Barang</th>
													
                                                    <th>Jumlah</th>
                                                    <th>Tanggal Pesan</th>
													<th>Tottal</th>
												
												
												</tr>
											</tfoot>
											<tbody>
                                                <?php  foreach($bulan as $b):?>
												<tr>
												
													
													<td><?=$b->nama_barang?></td>
												
													<td><?=$b->qty?></td>
													<td><?=$b->tgl_pesan?></td>
                                                    <td>Rp. <?= number_format($b->total)?></td>
                                                    
											
                                              	
												</tr>
												<?php endforeach;?>
											</tbody>
                                        </table>
                                       
											
                                    </div>
                                    <div class="container">
                                    <!-- <h1 style="text-align: center">TOTAL : Rp. <?= array_sum($hargatottal)?></h1> -->
                                    <?php $grand_tottal =0; if($bulan){?>
								<?php foreach($bulan as $b){
									$grand_tottal = $grand_tottal + $b->total;
								}?>
									<p class="d-flex total-price">
		    					
		    						<h2 style="text-align: center"><b><span>TOTTAL BULAN INI  : Rp. <?= number_format($grand_tottal)?></span></b></h2>
		    					</p>
		    					
		    					<hr>
		    					
								</div>
	          	</div>
						  <?php }else{}?>
                                </div>
                                  
								</div>
							</div>
						</div>
