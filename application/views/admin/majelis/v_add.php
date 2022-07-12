<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Jadwal Penceramah</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />                
              <?php 
              echo form_open_multipart('majelis/add'); ?>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" name = "tgl" required="required" placeholder="Tanggal" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Penceramah <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" name = "nm_penceramah" required="required" placeholder="Nama Penceramah" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" name = "keterangan" required="required" placeholder="Keterangan" class="form-control ">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                </div>
            </div>

            <?php echo form_close();  ?>
            </div>
        </div>
    </div>
</div>
</div>