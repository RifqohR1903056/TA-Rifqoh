<!-- End Intro Section -->
<!-- Contact Section -->
<section class="padding ptb-xs-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="headeing pb-30">
					<div class="section-title">
						<h3>Laporan Kas Masjid</h2>
					</div>
					<span class="b-line l-left line-h"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<table class="table table-bordered">
						<thead class="dark-bg">
							<th>No</th>
							<th class="text-center">Tanggal Kas </th>
							<th class="text-center">Uraian Kas </th>
							<th class="text-center">Masuk </th>
							<th class="text-center">Keluar </th>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($lapkas as $k) { ?>


								<tr>
									<td><?= $no++; ?></td>
									<td><?= $k->tgl_km ?> </td>
									<td><?= $k->uraian_km ?> </td>
									<td><?= $k->masuk ?> </td>
									<td><?= $k->keluar ?> </td>
								</tr>
							<?php 	} ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
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
						<button type="submit" class="btn btn-primary" name="btnCetak" target="_blank">Cetak Periode</button>
						<a href="<?php echo base_url() ?>kas_laporan/lap_full" class="btn btn-danger" target="_blank">Cetak Semua</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Map Section -->

</section>