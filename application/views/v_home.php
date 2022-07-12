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

  <iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 358px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/1643078/shafi/11/0/20.0/18.0"> </iframe>
    
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-12">
            <div class="section-title">
                            <h3>STRUKTUR ORGANISASI</h2>
                        </div>
               
            </div>
            <center>
            <div class="col-md-6 center">
                <img src="<?php echo base_url().'template/front-end/img/struktur.png'?>" class="img-fluid about-img" alt="#">
            </div>
  </center>
        </div>
    </div>
</section>
<!--//END ABOUT -->

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

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>NEWS & EVENT</h5>
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php foreach ($berita as $key => $value) { ?>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    
                   
                  </div>
                <div class="col-lg-3 ">
                    <div class="latest__blog__text">
                        <div class="label">Artikel</div>
                        <h5><a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->jdl_berita),0,100) ?></a></h5>
                        <p><i class="fa fa-clock-o"></i> </i><?= $value->tgl_berita ?></p>
                        <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>">Read More</a>
                    </div>
                </div>

              <?php } ?>    
                
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
   
