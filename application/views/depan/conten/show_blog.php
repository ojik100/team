<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<!-- head -->
<?php $this->load->view('depan/componen/header')?>

<!-- sidebar -->
<?php $this->load->view('depan/componen/sidebar')?>
<!-- endsidebar -->
<style>
            .blog{
                padding-top: 10px;
                padding-bottom: 40px;
            }
        </style>					
<section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item"  >
                            <h4>INFO DESA</h4>
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
                            <h4>Cari bedasarkan</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">KABUPATEN</a>
                                <a href="#">DESA</a>
                                <a href="#">DUSUN</a>
                                <a href="#">KECAMATAN</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="<?= $info['gambar'] != null ? base_url('upload/info/'.$info['gambar']) : base_url('upload/barang/no-image.jpg') ?>" alt="">
                     <p><?= $info['berita']?></p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="<?= base_url('assets/depan/')?>img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6><?= $info['nama_desa']?></h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Food</li>
                                        <li><span>Bagikan</span></li>
                                    </ul>
                                    <div class="blog__details__social">
                                        
                                        <a href="whatsapp://send?text=<?php echo site_url('info/'.$info['slug']) ?>"><i class="fa fa-whatsapp"></i></a>
                                     <a href="http://www.facebook.com/sharer.php?u=<?php echo site_url('info/'.$info['slug']) ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    



    <?php $this->load->view('depan/componen/footer')?>
