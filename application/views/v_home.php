<!-- Hero Section Begin -->
                    <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="<?= base_url() ?>template/front-end/img/plang1.jpeg" alt="">
                    </div>
                    <div>
                        <script type="text/javascript" src="https://www.muslimpro.com/muslimprowidget.js?cityid=1643078&language=id&timeformat=24" async></script>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Home About Section End -->
    
    <!-- Services Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-12">
            <div class="section-title">
                            <h3>Pengumuman Masjid Al-Istiqomah</h2>
                        </div>
            <div class="row">

                    <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        
                        <img src="<?= base_url()?>template/front-end/services/pengumuman.png" height="50" alt="">
                        <h4><?= $value->judul_pengumuman?> </h4>
                        <p><?= $value->isi_pengumuman?></p>
                        <p>
                                <h4><span>Tanggal</span> : <?= $value->tgl?> </h4>
                            </p>
                    </div>
                </div>

                    <?php   }?>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

   

                    </div>
                </div>
            </div>
            <div class="row">
               <?php foreach ($berita as $key => $value) { ?>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="latest__blog__pic set-bg" data-setbg="<?=base_url('gambar/'.$value->gambar_berita)?>"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="latest__blog__text">
                        <div class="label">Berita</div>
                        <h5><a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->jdl_berita),0,100) ?></a></h5>
                        <p><i class="fa fa-clock-o"></i> </i><?= $value->tgl_berita ?></p>
                        <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>">Selengkapnya</a>
                    </div>
                </div>

              <?php } ?>    
                
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
