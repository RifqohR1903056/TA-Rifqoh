 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(template/front-end/assets/img/remais.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">WELCOME TO <span>AL-ISTIQOMAH</span></h2>
              <p class="animated fadeInUp">Semoga Kita Semua Selalu Dalam Lindungan Allah.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(template/front-end/assets/img/masjid.jpeg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(template/front-end/assets/img/plang2.jpeg)">
          <div class="carousel-container">
            <div class="container">
          </div>
        </div>
      </div>


    </div>
  </section><!-- End Hero -->
    
    <!-- Services Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-12">
            <div class="section-title">
                            <h3>PENGUMUMAN MASJID AL-ISTIQOMAH</h2>
                        </div>
            <div class="row">

                    <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        
                        <img src="<?= base_url()?>template/front-end/services/pengumuman.png" height="50" alt="">
                        <h4><?= $value->judul_pengumuman?> </h4>
                        <p><?= $value->isi_pengumuman?></p>
                        <p>
                        <h4><span>Tanggal</span> : <?= date("d-m-Y", strtotime($value->tgl))?> </h4>
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

    <!-- Services Section Begin -->
                <div class="row">
                    <div class="col-lg-12">
            <div class="section-title">
                            <h3>MAPS</h2>
                        </div>
                        <div class="row">
    <!-- MAP-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9589215812034!2d108.28104921431192!3d-6.399295064368175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5011493e0221d653!2sMasjid%20Jami%20Al-Istiqomah!5e0!3m2!1sid!2sid!4v1655528085262!5m2!1sid!2sid" width="1190" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!-- MAP-->
				</div>
			</div>
		</section>
		<!-- End Services Section-->
				</div>
			</div>
		</section>
		<!-- End Services Section-->
