<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Zakat</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php
                echo form_open_multipart('zakat/edit/' . $tampildata->id_zakat); ?>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Zakat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="hidden" name="id_zakat" value="<?= $tampildata->id_zakat?>">
                        <input type="text" name="tgl" value="<?= $tampildata->tgl ?>" required="required" placeholder="Tanggal Kas" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Nama Pemberi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="nm_pemberi" value="<?= $tampildata->nm_pemberi?>" required="required" placeholder="Uraian Kas" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Alamat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="alamat" value="<?= $tampildata->alamat?>" required="required" placeholder="Uraian Kas" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Jenis Zakat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="jenis_zakat" value="<?= $tampildata->jenis_zakat?>" required="required" placeholder="Uraian Kas" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Jumlah <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="jumlah" value="<?= $tampildata->jumlah?>" required="required" placeholder="Uraian Kas" class="form-control ">
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