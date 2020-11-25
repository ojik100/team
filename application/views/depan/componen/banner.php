<section class="categories">
        <div class="container">
	
            <div class="row">
		     <div class="categories__slider owl-carousel">
             
                    <?php foreach($sup as $s):?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?= base_url('assets/depan/')?>img/sup1.png">
                            <h5><a href="#"><?= $s->nama?></a></h5>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <!-- <?php foreach($kawasan as $d):?>
                   
                    <?php endforeach;?> -->
                </div>
            </div>
        </div>
        <div class="container">
		<div>
					
        <div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-secondary mr-3">
										<i class="fa fa-book"></i>
									</span>
									<div>
										<h5 class="mb-1"><b><a href="#"><?= $barangt?> <small>Barang</small></a></b></h5>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-6 col-lg-3">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-success mr-3">
										<i class="fa fa-shopping-cart"></i>
									</span>
									<div>
										<h5 class="mb-1"><b><a href="#"><?= $pesan?> <small>Transaksi</small></a></b></h5>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-danger mr-3">
										<i class="fa fa-users"></i>
									</span>
									<div>
										<h5 class="mb-1"><b><a href="#"><?= $user?> <small>User</small></a></b></h5>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card p-3">
								<div class="d-flex align-items-center">
									<span class="stamp stamp-md bg-warning mr-3">
										<i class="fa fa-users"></i>
									</span>
									<div>
										<h5 class="mb-1"><b><a href="#"><?= $suplayer?> <small>Suplayer</small></a></b></h5>
										
									</div>
								</div>
							</div>
						</div>
					</div>

        </div>
    </section>
