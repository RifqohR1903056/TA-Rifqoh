<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">AL-ISTIQOMAH</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="<?= base_url() ?>template/front-end/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li class="active"><a href="<?= base_url()?>">Home</a></li>
        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?= base_url('home/organisasi') ?>">Struktur Organisasi</a></li>
            <li><a href="<?= base_url('home/sapra') ?>">Sarana Dan Prasarana</a></li>
            <li><a href="<?= base_url('home/gallery') ?>">Gallery Photo</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Agenda</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?= base_url('home/majelis') ?>">Majelis Ta'lim</a></li>
            <li><a href="<?= base_url('home/jumat') ?>">Sholat Jumat</a></li>
            <li><a href="<?= base_url('home/tarawih') ?>">Sholat Tarawih</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
          <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/lapkas') ?>">Laporan Kas</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/contact') ?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



 

