 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(template/front-end/assets/img/remais.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h1 class="animated fadeInDown">SELAMAT DATANG DI WEBSITE <span>AL-ISTIQOMAH</span></h1>
              <h4 class="animated fadeInDown">SEGALA PUJI BAGI ALLAH, <span>TUHAN SEMESTA ALAM</span></h4>
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
<!-- About Section Begin -->
<section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>New Event</h2>
                        </div>
                    </div>
                   	
  
<div class="row">
<?php foreach ($berita as $key => $value) { ?>
  <div class="col-sm-4">
    <div class="card">
    <img src="<?=base_url('gambar/'.$value->gambar_berita)?>" class="card-img-top" alt="..." width="200px" height="200px">
      <div class="card-body">
      </div>
      <p><?=($value->jdl_berita)?></p>
      <p><i class="fa fa-clock-o"></i> </i><?= $value->tgl_berita ?></p>
      <a class="btn btn-primary" href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>">Read More</a>
    </div>
  </div>
  <?php } ?>
</div>

        
        </div>
    </section>


     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>GALLERY PHOTO</h2>
          <h3>Check our <span>Gallery Photo</span></h3>
          <p>Begitulah Keajaiban Fotografi, Ngga Hanya Mengabadikan Momen Penting Dalam Hidup,Tapi juga Membekukan Kenangan Yang Ingin Diingat.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">PHBI</li> 
              <li data-filter=".filter-card">Idul Fitri</li> 
              <li data-filter=".filter-web">Idul Adha</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/phbi5.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>PHBI 1</h4>
                    <p>PHBI</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/phbi5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/kurban2.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Adha 3</h4>
                    <p>Idul Adha</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/kurban2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/phbi4.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>PHBI 2</h4>
                    <p>PHBI</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/phbi4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/id3.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Fitri 2</h4>
                    <p>Idul Fitri</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/id3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/kurban1.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Adha 2</h4>
                    <p>Idul Adha</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/kurban1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/phbi3.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>PHBI 3</h4>
                    <p>PHBI</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/phbi3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/id4.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Fitri 1</h4>
                    <p>Idul Fitri</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/id4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/id2.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Fitri 3</h4>
                    <p>Idul Fitri</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/id2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="template/front-end/assets/img/portfolio/rapat kurban.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Idul Adha 3</h4>
                    <p>Idul Adha</p>
                    <div class="portfolio-links">
                      <a href="template/front-end/assets/img/portfolio/rapat kurban.jpeg"" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

            </div>
          </div>

        </div>

      </div>
    </section>

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Get In Touch With <span>Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Tempat</h4>
                    <p>Desa Lohbener RT.18 RW.05<br>Indramayu, Jawa Barat</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Telefon</h4>
                    <p>+6282 1156 09172 <br>+6281 8069 47762</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email</h4>
                    <p>istiqomah@gmail.com<br>remaislohbener@gmail.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Working Hours</h4>
                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="8" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

   
    
