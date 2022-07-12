 <!-- About Section Begin -->
 <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>Gallery Photo</h2>
                        </div>
                    </div>
                   	

<div class="row">
<?php foreach ($gallery as $key => $value) { ?>
  <div class="col-sm-4">
    <div class="card">
    <img src="<?=base_url('photo/'.$value->photo)?>" class="card-img-top" alt="..." width="200px" height="200px">
      <div class="card-body">
        <h5 class="card-title"><?= $value->nama_gallery?></h5>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

        
        </div>
    </section>


