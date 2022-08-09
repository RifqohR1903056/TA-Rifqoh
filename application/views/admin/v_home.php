<!-- <div class="right_col" role="main"> -->
          <!-- top tiles -->
    
    <!-- <div class="row" style="display: inline-block;" >
    <div class="card h-100">
    <div class="card body">
    <div class="row no-gutters align-items-center">
      <div class="col mr-2">
      <div class="tile_count">
        <div class="col-md-4 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-bullhorn"></i> TOTAL PENGUMUMAN</span>
          <div class="count"><?php echo $pengumuman;?></div>
        </div>
        <div class="col-md-4 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-newspaper-o"></i> TOTAL BERITA</span>
          <div class="count"><?php echo $berita; ?></div>
        </div>
        <div class="col-md-4 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-newspaper-o"></i> TOTAL SAPRA</span>
          <div class="count"><?php echo $sapra; ?></div>
        </div>
        <div class="col-md-4 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-money"></i> TOTAL KAS MASUK</span>
          <div class="count">
            <?php foreach($tot_masuk as $t): ?>
              <div class="count">Rp. <?= number_format($t->total,0,'.',','); ?></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-6  tile_stats_count">
          <span class="count_top"><i class="fa fa-money"></i> TOTAL KAS KELUAR</span>
          <div class="count">
            <?php foreach($tot_keluar as $t): ?>
              <div class="count">Rp. <?= number_format($t->total,0,'.',','); ?></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div> -->

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <span class="count_top"><i class="fa fa-bullhorn"></i>TOTAL PENGUMUMAN</span>
        <div class="count"><?php echo $pengumuman;?></div>
        <div class="count">
          </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <span class="count_top"><i class="fa fa-bullhorn"></i>TOTAL BERITA</span>
        <div class="count"><?php echo $berita;?></div>
        <div class="count">
          </div>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <span class="count_top"><i class="fa fa-bullhorn"></i>TOTAL SAPRA</span>
        <div class="count"><?php echo $sapra;?></div>
        <div class="count">
          </div>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <span class="count_top"><i class="fa fa-money"></i> TOTAL KAS MASUK</span>
          <div class="count">
            <?php foreach($tot_masuk as $t): ?>
              <div class="count">Rp. <?= number_format($t->total,0,'.',','); ?></div>
            <?php endforeach; ?>
          </div>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <span class="count_top"><i class="fa fa-money"></i> TOTAL KAS KELUAR</span>
          <div class="count">
          <?php foreach($tot_keluar as $t): ?>
              <div class="count">Rp. <?= number_format($t->total,0,'.',','); ?></div>
            <?php endforeach; ?>
          </div>
      </div>
    </div>

          </div>
      </div>
    </div>
</div>