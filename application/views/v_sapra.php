	 <section class="rooms spad">
        <div class="container">
           
                <?php foreach ($sapra as $key => $value) { ?>
                
                    <div class="container">
                        <div class="row">

                            
                            <div class="card" style="width: 18rem;">
                                <img src="<?=base_url('sampul/'.$value->sampul)?>" class="card-img-top img-thumbnail" alt="..." >
                                <div class="card-body">
                                    <p class="card-text"><?= $value->nama_sapra?></p>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>
        
        </div>
    </section>


