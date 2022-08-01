<!-- About Section Begin -->
<section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-13">
                        <div class="section-title">
                            <h3>STRUKTUR ORGANISASI</h2>
                        </div>
                    </div>
                   
                </div>
            </div>

<section class="rooms spad">
        <div class="container">

<div class="row">
<?php foreach ($organisasi as $key => $value) { ?>
    <center> 
  <div class="col-sm-6">
    <img src="<?=base_url('struktur/'.$value->struktur)?>" class="img-fluid about-img" alt="#">
</div>
</center>
       
  </div>
  <?php } ?>
</div>


        
        </div>
    </section>


