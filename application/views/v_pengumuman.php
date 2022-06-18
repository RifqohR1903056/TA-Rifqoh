 <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>PENGUMUMAN MASJID AL-ISTIQOMAH</h2>
                        </div>
                    </div>
                   
                </div>
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
