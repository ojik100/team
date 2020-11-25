<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php $this->load->view('depan/componen/humber')?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
	    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php if($this->agent->is_mobile()){?>
        <section class="hero hero-normal">
    <?php }else{?>
        <section class="hero">
    <?php }?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua desa</span>
                        </div>
                        <ul  style="overflow:auto;height:400px;padding:10px;border:1px solid #eee">
                        <?php foreach($kawasan as $d):?>
                            <li><a href="<?= $d->id_desa?>"><?= $d->nama_desa?></a></li>
                        <?php endforeach;?>
                           
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                   
                        <div class="hero__search__form">
                        <?php echo form_open('web/Home/search') ?>
                               <!-- <div class="hero__search__categories">
                                    Semua Kategori
                                    <span class="arrow_carrot-down">
                                        
                                    </span>
                                </div>-->
                                <input type="text" name="keyword"  placeholder="Apa yang kamu butuhkan?">
                                <button type="submit" class="site-btn">Cari</button>
                            
                            <?php echo form_close() ?>
                        </div>

                        <?php if($this->session->userdata('level')== false){?>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
							
                            <div class="hero__search__phone__text">
                                <a href="https://api.whatsapp.com/send?phone=6287851922063" target="blank"><h5>WhatsApp</h5></a>
                                <span>support 24/7 time</span>
								
                            </div>
                        </div>
                    </div>
                        <?php }else{?>

                            <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="hero__search__phone__text">
							<a href="<?= base_url('L_user/logout') ?>" class=""><span class="fa fa-sign-out"></span><span> Logout</span></a>
                                <h5><?= $this->session->userdata('nama')?></h5>
                                <span>support 24/7 time</span>
								
                            </div>
                        </div>
                    </div>

                        <?php }?>

                        <!-- slide -->
                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/depan/')?>img/hero/tes.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/depan/')?>img/hero/banner1.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/depan/')?>img/hero/banner.jpeg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- endslide -->
    </section>

    <!-- <div class="container col-10"> <a style="margin-top: -10px" href="#"><img height="60px" width="130px" src="<?= base_url('assets/')?>app.png" alt=""></a>
                   </div> -->

                   <!-- <div class="container"><a class="col-md-12 site-btn" href="<?= base_url('assets/aplikasi')?>/app-debug.apk">klik untuk download aplikasi</a></div> -->
    <!-- Hero Section End -->         
