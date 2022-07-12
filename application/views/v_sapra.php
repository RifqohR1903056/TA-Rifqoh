 <!-- About Section Begin -->
 <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>SARANA & PRASARANA</h2>
                        </div>
                    </div>
                   	
  
<div class="row">
<?php foreach ($sapra as $key => $value) { ?>
  <div class="col-sm-4">
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


