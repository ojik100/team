<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> team@elades.com</li>
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a target="blank" href="https://www.facebook.com/182991152051060/posts/1145590252457807/?d=n"><i class="fa fa-facebook"></i></a>
                                <a target="blank" href="https://twitter.com/lades_official"><i class="fa fa-twitter"></i></a>
                               
                            </div>
                            <!-- <div class="header__top__right__language">
                                <img src="<?= base_url('assets/depan/')?>img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <?php if($this->session->userdata('level')== false){?>
							<div class="header__top__right__language">
                              
                                <div><i class="fa fa-lock"></i><span > </span> Masuk </div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
									<li><a href="<?= base_url('L_user')?>"><i class="fa fa-users"></i> User</a> </li>
								<li><a href="<?= base_url('L_supplier')?>"><i class="fa fa-users"></i> Supplier</a> </li>
								<li><a href="<?= base_url('L_bumdes')?>"><i class="fa fa-home"></i> Bumdes</a> </li>
                               
							    </ul>
                            </div>
                            <?php }else if($this->session->userdata('level')== 1 || $this->session->userdata('level')== 2){?>
                                <div class="header__top__right__language">
                              
                                <div>Dashboard</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
									<li><a href="<?= base_url('dashboard')?>"><i class="fa fa-user"></i>dashboard</a> </li>
							
                                </ul>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
					
                        <a href="<?= base_url('home')?>"><img src="<?= base_url('assets/')?>lades.png" height="40px" width="80px"  alt=""></a>
						
					</div>
                </div>
                <div class="col-lg-8">
                    <nav class="header__menu">
                    <ul>
                <?php
                    $hal = $this->uri->segment(1);
                ?>

                
                        <li class="<?=($hal=='home')?'active':'';?>"><a href="<?=base_url();?>home">beranda</a></li>
                        <li><a href="https://elades.lomboktimurkab.go.id/download/">Unduh</a></li>
							
					    <li class="<?=($hal=='cek_harga')?'active':'';?>"><a href="<?=base_url();?>Harga/cek">Cek Harga</a></li>
                          
						   <li><a href="#">info</a>
                                <ul class="header__menu__dropdown">
								<li class="<?=($hal=='covid')?'active':'';?>"><a href="<?=base_url();?>covid">covid 19</a></li>
                          
                                <li><a href="<?= base_url('data_supplier')?>">Daftar suplayer</a></li>
                                    <li><a href="<?= base_url('data_desa')?>">Daftar desa</a></li>
                                   
                                   
                                </ul>
                            </li>
                            <li class="<?=($hal=='info_desa')?'active':'';?>"><a href="<?=base_url();?>info_desa">Berita</a></li>
							<li><a href="">Panduan</a></li>
						
                              </ul>
                    </nav>
                </div>
                <?php if($this->session->userdata('level')== null){?>

                <?php }else{?>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>RP.150.00</span></div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
