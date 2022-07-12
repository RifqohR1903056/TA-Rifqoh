<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <span class="text-dark"><i class="fa fa-info"></i> Saldo Kas Masjid</span>
            <?php foreach ($tot_rekap as $n) : ?>
                <p>
                    <span class="text-dark">Pemasukan : Rp. <?= $n->tot_masuk; ?></span><br>
                    <span class="text-dark">Pengeluaran : Rp. <?= $n->tot_keluar; ?></span>
                </p>
            <?php endforeach; ?>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Tanggal Kas </th>
                                    <th class="text-center">Uraian Kas </th>
                                    <th class="text-center">Masuk </th>
                                    <th class="text-center">Keluar </th>
                                    <th class="text-center">Jenis </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($tampildata as $k) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k->tgl_km ?> </td>
                                        <td><?= $k->uraian_km ?> </td>
                                        <td><?= $k->masuk ?> </td>
                                        <td><?= $k->keluar ?> </td>
                                        <td><?= $k->jenis ?> </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>