<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Shodaqoh</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />                
              <?php 
              echo form_open_multipart('shodaqoh/edit/'.$shodaqoh->id_shodaqoh); ?>

            
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" name = "tgal" required="required" placeholder="tgl" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pemberi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $shodaqoh->nama_pemberi?>" name = "nama_pemberi" required="required" placeholder="Nama Pemberi" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $shodaqoh->alamat ?>" name = "alamat " required="required" placeholder="Alamat " class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Shodaqoh <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $shodaqoh->jenis_shodaqoh?>" name = "jenis_shodaqoh" required="required" placeholder="Jenis Shodaqoh" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $shodaqoh->jml_shodaqoh?>" name = "jml_shodaqoh " required="required" placeholder="Jumlah " class="form-control ">
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