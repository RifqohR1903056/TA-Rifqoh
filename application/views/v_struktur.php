	 <section class="rooms spad">
        <div class="container">
        <?php foreach ($struktur as $key => $value) { ?>
                
                <div class="container">
                    <div class="row">

                        
                        <div class="card" style="width: 18rem;">
                            <img src="<?=base_url('sampul/'.$value->sampul)?>" class="card-img-top img-thumbnail" alt="..." >
                            <div class="card-body">
                
                <div class="col-lg-6 p-0 order-lg-4 order-md-4 col-md-6">
                    <div class="room__text right__text">
                        <h3>Struktur Organisasi</h3>
                        <ul>
                            <li><h5><strong><br />
											</strong><br />
											<h5>"Berikut informasi sepenuhnya tentang struktur organisasi Masjid Istiqomah."</h5>
											<p>&nbsp;</p></li>
                        </ul>
                        </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>
        
        </div>
    </section>
