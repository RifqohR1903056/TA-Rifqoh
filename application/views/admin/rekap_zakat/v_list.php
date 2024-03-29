<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <span class="text-dark"><i class="fa fa-info"></i> Saldo Zakat</span>
            <?php foreach ($tot_rekap as $n) : ?>
                <p>
                    <span class="text-dark">Pemasukan : Rp. <?= $n->tot_jumlah; ?></span><br>
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
                                    <th class="text-center">Tanggal </th>
                                    <th class="text-center">Nama Pemberi </th>
                                    <th class="text-center">Alamat </th>
                                    <th class="text-center">Jenis Zakat </th>
                                    <th class="text-center">Jumlah </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($tampildata as $k) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k->tgl ?> </td>
                                        <td><?= $k->nm_pemberi ?> </td>
                                        <td><?= $k->alamat ?> </td>
                                        <td><?= $k->jenis_zakat ?> </td>
                                        <td><?= $k->jumlah ?> </td>
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