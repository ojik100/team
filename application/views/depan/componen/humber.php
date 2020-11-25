<div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?= base_url('assets/') ?>lades.png" width="80" height="40" alt=""></a>
        </div>
        <?php if($this->session->userdata('level')== null){?>

        <?php }else{?>
        <div class="humberger__menu__cart">
            <ul>
                <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>RP.150.00</span></div>
        </div>
        <?php }?>
        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
                <img src="<?= base_url('assets/depan/')?>img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div> -->
			<div class="header__top__right__language">
                                
            <?php if($this->session->userdata('level')== false){?>
							<div class="header__top__right__language">
                              
                                <div><i class="fa fa-lock"></i>Masuk</div>
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
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <?php
                    $hal = $this->uri->segment(3);
                ?>

                
                        <li class="<?=($hal=='home')?'active':'';?>"><a href="<?=base_url();?>home">Home</a></li>
                            <li><a href="https://elades.lomboktimurkab.go.id/download/">Unduh apk</a></li>
							<li><a href="#">info</a>
                                <ul class="header__menu__dropdown">
								<li class="<?=($hal=='covid')?'active':'';?>"><a href="<?=base_url();?>covid">covid 19</a></li>
                             
                                <li><a href="<?= base_url('data_supplier')?>">Daftar suplayer</a></li>
                                    <li><a href="<?= base_url('data_desa')?>">Daftar desa</a></li>
                                   
                                   
                                </ul>
                            <li class="<?=($hal=='info_desa')?'active':'';?>"><a href="<?=base_url();?>info_desa">Info Desa</a></li>
                            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> team@elades.com</li>
                <li>#Gerakandesamelancovid19</li>
            </ul>
        </div>
    </div>
