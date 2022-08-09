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
  </section>
  <!-- End Hero -->

  <!-- ======= Struktur Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>PENGUMUMAN</h2>
          <h3>Pengumuman Masjid <span>Al-Istiqomah</span></h3>
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
                
					<?php 	}?>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- ======= Struktur Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>STRUKTUR</h2>
          <h3>Struktur Organisasi <span>Al-Istiqomah</span></h3>
               
            </div>
            <center>
            <div class="col-md-6 center">
                <img src="<?php echo base_url().'template/front-end/img/struktur.png'?>" class="img-fluid about-img" alt="#">
            </div>
  </center>
        </div>
<!--//END ABOUT -->



     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>GALLERY PHOTO</h2>
          <h3>Gallery Photo <span>Al-Istiqomah</span></h3>
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

    <!-- ======= Sapra Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Fasilitas</h2>
          <h3>Fasilitas Masjid <span>Al-Istiqomah</span></h3>
          </div>
            <div class="row">       	
  
<div class="row">
<?php foreach ($sapra as $key => $value) { ?>
  <div class="col-sm-3">
    <div class="card">
    <img src="<?=base_url('sampul/'.$value->sampul)?>" class="card-img-top" alt="..." width="200px" height="200px">
      <div class="card-body">
        <h5 class="card-title"><?= $value->nama_sapra?></h5>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

        
        </div>
    </section>

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>KONTAK KAMI</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-12">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Tempat</h4>
                    <p>Desa Lohbener RT.18 RW.05<br>Indramayu, Jawa Barat</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Telephone</h4>
                    <p>+6282 1156 09172 <br>+6281 8069 47762</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email</h4>
                    <p>istiqomah@gmail.com<br>remaislohbener@gmail.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Jam Buka</h4>
                    <p>Senin-Minggu: 04.00 s.d 10.00</p>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

   
    
