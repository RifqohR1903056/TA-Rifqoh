<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
        <?php foreach($tot_masuk as $t) : ?>
        <h2><?= $title." <b>Rp. ".$t->total."</b>"?></h2>
        <?php endforeach; ?>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>   
        </ul>
        <div class="clearfix"></div>
            </div>
            
            <a href="<?= base_url('kas/tambah'); ?>"class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <?php
                                if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>';
                            echo $this->session->flashdata ('pesan');
                            echo '</div>';
                        }
                        ?>
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Tanggal Kas </th>
                                    <th class="text-center">Uraian Kas </th>
                                    <th class="text-center">Masuk </th>                              
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                              
                            <?php $no=1; foreach ($tampildata as $k) { ?>
                         
                            <tr>	
                                <td><?= $no++; ?></td>
                                <td><?= $k->tgl_km?> </td>
                                <td><?= $k->uraian_km?> </td>
                                <td><?= $k->masuk?> </td>
                                
                                <td>
                                <a href="<?= base_url('kas/edit/'.$k->id_km)?>" class ="btn btn-xs btn-primary"> <i class="fa fa-pencil"> </i></a>
                                <a href="<?= base_url('kas/delete/'.$k->id_km)?>" onclick="return confirm('Apakah Data Ingin Dihapus..?')" class ="btn btn-xs btn-danger"> <i class="fa fa-trash"> </i></a>
                                </td>
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
