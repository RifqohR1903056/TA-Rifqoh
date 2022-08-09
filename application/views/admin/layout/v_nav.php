 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
				
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard (alias)"></i> Dashboard <span class="label label-success pull-right"></span></a></li>
                  <li><a><i class="fa fa-home"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="<?= base_url('sapra')?>">Sarana & Prasarana</a></li>
                      <li><a href="<?= base_url('organisasi')?>">Struktur Organisasi</a></li>
                      <li><a href="<?= base_url('gallery')?>">Gallery Photo</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Agenda <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="<?= base_url('majelis')?>">Majelis Ta'Lim</a></li>
                      <li><a href="<?= base_url('jumat')?>">Sholat Jumat</a></li>
                      <li><a href="<?= base_url('tarawih')?>">Sholat Tarawih</a></li> 
                    </ul>
                  </li>    
                  <li><a><i class="fa fa-money"></i> Kas Masjid <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="<?= base_url('kas/index')?>">Kas Masuk</a></li>
                      <li><a href="<?= base_url('kas_keluar/index')?>">Kas Keluar</a></li>
                      <li><a href="<?= base_url('rekap_kas/index')?>">Rekap Kas</a></li>  
                    </ul>
                  </li>   
                  <li><a href="<?= base_url('pengumuman')?>"><i class="fa fa-bullhorn"></i> Pengumuman <span class="label label-success pull-right"></span></a></li>  
                  <li><a href="<?= base_url('berita')?>"><i class="fa fa-newspaper-o"></i> Berita <span class="label label-success pull-right"></span></a></li>  
                </ul>
                  </li>       
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
		</div>
		
		<!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('nama_user');?> <b></b>
                      <!-- <img src="<?= base_url() ?>template/back-end/production/images/img.jpg" alt="">John Doe -->
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

         <!-- page content -->
         <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            
          </div>
        </div>
          <!-- /top tiles -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/back-end/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>template/back-end/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>template/back-end/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url() ?>template/back-end/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url() ?>template/back-end/vendors/Chart.js/dist/Chart.min.js"></script>

    <div class="">
    <div class="page-title">
        <div class="title_left">
        </div>
    </div>
    </div>