

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
					
							
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"></div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
										<?php if ($this->session->flashdata('success')): ?>
											<div class="alert alert-success" role="alert">
												<?php echo $this->session->flashdata('success'); ?>
											</div>
											<?php endif; ?>
										
									
											<form action="" method="post" enctype="multipart/form-data" >
                              
									
                                        <div class="col-md-12 offset-md-2 col-lg-8 ">
										<input type="hidden" name="id" value="<?php echo $pesanan->id_order?>">
										<input type="hidden" name="id_user" value="<?php echo $pesanan->id?>">
										<input type="hidden" name="id_barang" value="<?php echo $pesanan->id_barang?>">
										<input type="hidden" name="tgl_pesan" value="<?php echo date("Y-m-d")?>">
										<input type="hidden" name="qty" value="<?php echo $pesanan->qty?>">
										<input type="hidden" name="total" value="<?php echo $pesanan->total?>">
									
									
									
										<div class="form-group">
												<label for="">komfirmasi</label>
												<select class="form-control" name="status" >
                                                    <option value="proses">proses</option>
													<option value="dikonfirmasi">diconfirmasi</option>
													<option value="COD">COD</option>
                                              
                                                </select>
											</div>
										</div>
                                        </div>
										
									</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-2">
                                    <button class="btn btn-success">komfirmasi</button>
									<button class="btn btn-danger">Cancel</button>
                                    </div>
									
                                </div>
                            </form>
						
						
							</div>
						</div>
					</div>
				</div>
			</div>
		