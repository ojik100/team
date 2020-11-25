<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<!-- head -->

<!-- sidebar -->

<?php $this->load->view('depan/componen/header')?>

<?php $this->load->view('depan/componen/sidebar')?>
<!-- endsidebar -->

<section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                        <!-- penambahan image ada atau tidak ada -->
                            <img class="product__details__pic__item--large"
                                src="<?= is_file('upload/barang/'.$barang['gambar']) ? base_url('upload/barang/'.$barang['gambar']) : base_url('assets/web/images/no-image.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                    <?php
								if(substr(trim($barang['kontak']), 0, 3) == '08'){
									$no_hp = trim($barang['kontak']);
								}
								// cek apakah no hp karakter 1 adalah 0
								elseif(substr(trim($barang['kontak']), 0, 1) == '0'){
									$no_hp = '+62'.substr(trim($barang['kontak']), 1);
								}
							?>
                        <h3><?= $barang['nama_barang']?></h3>
                        
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rp. <?= number_format($barang['harga'])?></div>
                        <p></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $no_hp ?>" class="primary-btn">chat pelapak</a>
   
                        <?php if($this->session->userdata('level')== false){?>
                        <a href="https://elades.lomboktimurkab.go.id/download/" target="blank" onclick="swal('Silahkan melakukan pembelanjaan di aplikasi yang sudah tersedia ')" class="primary-btn">Beli</a>
   
                        <?php }else{?>
                        <a style="color: white" onclick="swal('silahkan melakukan pembelanjaan di aplikasi yang sudah tersedia')" class="primary-btn">Beli</a>
                        <?php }?>
                        <ul>
                            <li><b>Nama Toko</b> <span>: <?=$barang['nama']?></span></li>
                            <li><b>Stok </b> <span>: <B><?=$barang['stok']?></B></span></li>
							<li><b>Harga  </b> <span>: <B>Rp. <?=$barang['harga']?></B></span></li>
							<li><b>Status </b>  : <font color="red" size="4px"><b><?=$barang['status']?></b></font></li>
							<li><b>Bagikan</b> :  
                                <div class="share">
                                     <a href="whatsapp://send?text=<?php echo site_url('product/'.$barang['slug']) ?>"><i class="fa fa-whatsapp"></i></a>
                                     <a href="http://www.facebook.com/sharer.php?u=<?php echo site_url('product/'.$barang['slug']) ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                       
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Informasi</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Informasi Produk</h6>
                                   
                                </div>
                            </div>
							<div class="col-md-4">
  <div class="row">
    <div class="col-sm">
	<img   src="<?= is_file('upload/barang/'.$barang['gambar']) ? base_url('upload/barang/'.$barang['gambar']) : base_url('assets/web/images/no-image.jpg') ?>" alt="">
                    
		   </div>
		  
                            </div>

							
                    </div>
					<h6><b>Keterangan :</b></h6>
							<p><?= $barang['keterangan']?></p>

                </div>
            </div>
        </div>
    </section>



    <?php $this->load->view('depan/componen/footer')?>
