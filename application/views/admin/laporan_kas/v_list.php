<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <!-- .... -->
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <form action="<?php echo base_url() ?>kas_laporan/lap_per" method="post" target="_blank">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="tgl_1" name="tgl_1" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="tgl_2" name="tgl_2" required="">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="btnCetak" target="_blank">Cetak Periode</button>
                            <a href="<?php echo base_url() ?>kas_laporan/lap_full" class="btn btn-danger" target="_blank">Cetak Semua</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>