<body>
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
            <li><a href="<?= base_url('home/struktur') ?>">Struktur Organisasi</a></li>
            <li><a href="<?= base_url('home/sapra') ?>">Sarana Dan Prasarana</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Jadwal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sholat Jumat</a></li>
              <li><a href="#">Majelis Ta'lim</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/prestasi') ?>">Kajian</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('home/contact') ?>">Kontak</a></li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->