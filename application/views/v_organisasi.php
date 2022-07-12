<section class="rooms spad">
        <div class="container">

<div class="row">
<?php foreach ($organisasi as $key => $value) { ?>
  <div class="col-sm-4">
    <div class="card">
    <img src="<?=base_url('struktur/'.$value->struktur)?>" class="card-img-top" alt="..." width="200px" height="200px">
      <div class="card-body">
        <h5 class="card-title"><?= $value->nama_organisasi?></h5>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

        
        </div>
    </section>


