<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<?php $this->load->view('depan/componen/runing')?>
<!-- head -->

<!-- sidebar -->
<?php $this->load->view('depan/componen/sidebar')?>
<!-- endsidebar -->



    <!-- Categories Section Begin -->
    <?php if($this->agent->is_mobile()){?>
        <style>
            .featured{
                padding-top: 20px;
                padding-bottom: 40px;
            }
        </style>
    <?php }else{?>
    
    <?php $this->load->view('depan/componen/banner')?> 

    
    <?php }?><BR>
    <div class="container">
    <div class="title">
                        <h2>Kategori Produk</h2><hr>
					
                    </div>
                    <div class="card-group">
  <div class="card">
    <img class="card-img-top"  src="data:image/png;base64,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" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
    </div>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Semua Produk</h2>
					
                    </div>
                    <div class="featured__controls">
                        <ul>
                        <li><a style="color: black" data-filter="*"  class="active">Semua</a></li>
					       <?php foreach($kat as $k):?>
                                <li><a style="color: black"  data-filter=".<?= $k->kategori?>"><?= $k->kategori?></a></li>
    				     <?php endforeach;?>
                         </ul>
                    </div>
                </div>
            </div>
           <style type="text/css">
#product__discount__percent1 {
	height: 48px;
	width: 49px;
	background: green;
	border-radius: 50%;
	font-size: 14px;
	color: #ffffff;
	line-height: 47px;
	text-align: center;
	position: absolute;
	left: 15px;
	top: 15px;
}
#product__discount__percent {
	height: 48px;
	width: 49px;
	background: red;
	border-radius: 50%;
	font-size: 14px;
	color: #ffffff;
	line-height: 47px;
	text-align: center;
	position: absolute;
	left: 15px;
	top: 15px;
}
		   </style>
		
			
            <div class="row featured__filter">
            <?php
			$no = $this->uri->segment('3') + 1;
            foreach($barang as $b):?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $b->kategori?>">
                <div class="product__discount__item ">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="<?= is_file('upload/barang/'.$b->gambar) ? base_url('upload/barang/'.$b->gambar) : base_url('assets/web/images/no-image.jpg') ?>" set_data="<?= $b->kategori?>">
											<?php if($b->status == "Kosong"){?>
											<div id="product__discount__percent"><?= $b->status?></div>
											<?php }else if($b->status == "Tersedia"){?>
												<div id="product__discount__percent1"><?= $b->status?></div>
											<?php }?>
                                             <ul class="product__item__pic__hover">
                                              
                                                <li><a href="<?php echo site_url('product/'.$b->slug) ?>"><i class="fa fa-eye"></i></a></li>
                                                <?php if($this->session->userdata('level')== false){?>
                                                <a href="<?php echo site_url('home') ?>">
                                                <?php }else{?>
                                                    <a href="<?php echo site_url('web/home/tambah_k/'.$b->id_barang) ?>">
                                                    <?php }?>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?= $b->supllier?></span>
											
                                            <h5><a href="<?php echo site_url('product/'.$b->slug) ?>"><?= $b->nama_barang?></a></h5>
                                            <div class="product__item__price">Rp. <?= number_format($b->harga)?></div>
                                        </div>
                                    </div>
                </div>
                <?php endforeach;?>
            </div>
            
        </div>
     
    </section>
    <div class="ml-4">
    <nav aria-label="Page navigation">
        <?php 
	echo $this->pagination->create_links();
    ?>
    </nav>
    </div>
    <br>
    
    
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <?php if($this->agent->is_mobile()){?>
        <?php }else{?>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?= base_url('assets/')?>bg.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?= base_url('assets/depan/')?>img/hero/banner1.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- Banner End -->
    <?php if($this->agent->is_mobile()){?>
        <?php $this->load->view('depan/componen/banner')?> 
    <?php }else{?>

   

    <?php }?>
    
   
    <!-- Footer Section Begin -->
 <?php $this->load->view('depan/componen/footer')?>
 <!-- endfooter -->
