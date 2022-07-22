<!-- About Section Begin -->
 <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>BERITA</h2>
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
      <a class="btn btn-primary" href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>">Read More</a>
    </div>
  </div>
  <?php } ?>
</div>

        
        </div>
    </section>


