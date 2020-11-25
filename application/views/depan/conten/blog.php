<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<!-- head -->

<!-- sidebar -->
<?php $this->load->view('depan/componen/header')?>
<?php $this->load->view('depan/componen/sidebar')?>
<!-- endsidebar -->
<style>
            .blog{
                padding-top: 10px;
                padding-bottom: 40px;
            }
        </style>

					
<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                        <?php echo form_open('info_desa/search') ?>
                                <input name="keyword" type="text" placeholder="Cari...">
                                <button type="submit"><span class="icon_search"></span></button>
                                <?php echo form_close() ?>
                        </div>
                        <div class="blog__sidebar__item"  >
                            <h4>INFO NEWS</h4>
                            <div class="blog__sidebar__recent" style="overflow:auto; height:300px;">
                            <?php  foreach($terbaru as $b):?>    
                            <a href="<?php echo site_url('info/'.$b->slug) ?>" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img width="60px" src="<?= $b->gambar != null ? base_url('upload/info/'.$b->gambar) : base_url('upload/barang/no-image.jpg') ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?= $b->judul?></h6>
                                        <span><?= $b->time?></span>
                                    </div>
                                </a>
                                <?php endforeach;?>  
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Cari Bedasarkan</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">KABUPATEN</a>
                                <a href="#">DESA</a>
                                <a href="#">DUSUN</a>
                                <a href="#">KECAMATAN</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                    <?php $no = $this->uri->segment('3') + 1; foreach($info as $b):?> 
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?= $b->gambar != null ? base_url('upload/info/'.$b->gambar) : base_url('upload/barang/no-image.jpg') ?>" alt="info desa">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i><?= $b->time?></li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="<?php echo site_url('info/'.$b->slug) ?>"><?= $b->judul?></a></h5>
                                    <p><?php echo (str_word_count($b->berita) > 60 ? substr($b->berita,0,60)."...." : $b->berita)?></p>
                                    <a href="<?php echo site_url('info/'.$b->slug) ?>" class="blog__btn">Selengkapnya <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
               
                        <div class="col-lg-12">
                            <!-- <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div> -->
                            <div class="ml-4">
    <nav aria-label="Page navigation">
        <?php 
	echo $this->pagination->create_links();
    ?>
    </nav>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php $this->load->view('depan/componen/footer')?>
