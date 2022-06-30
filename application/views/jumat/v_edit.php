<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Sholat Jumat</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />                
              <?php 
              echo form_open_multipart('jumat/edit/'.$jumat->id_jumat); ?>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Khatib <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $jumat->nm_khatib?>" name = "nm_khatib" required="required" placeholder="Nama Khatib" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Imam <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $jumat->nm_imam?>" name = "nm_imam" required="required" placeholder="Nama Imam" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Muadzin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $jumat->nm_muadzin?>" name = "nm_muadzin" required="required" placeholder="Nama Muadzin" class="form-control ">
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