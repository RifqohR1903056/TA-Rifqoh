
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">					
						<div class="col-lg-12">
							<div class="headeing pb-30">
								<div class="section-title">
                            <h4>DATA WAQAF</h4>
							<h4>MASJID AL-ISTIQOMAH</h4>
                        </div>
								<span class="b-line l-left line-h"></span>
							</div>			
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead class="dark-bg">
										<tr>					
											<th class="text-center">NO</th>
                                            <th class="text-center">Tanggal</th>
											<th class="text-center">Nama Waqif </th>
											<th class="text-center">Lokasi Tanah </th>
											<th class="text-center">Luas Tanah </th>
											<th class="text-center">No Sertifikat </th>
											<th class="text-center">Nadzir </th>
											<th class="text-center">Nama Penggarap </th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($waqaf as $key => $value) { ?>
											
									
										<tr>
											<td class="text-center"> <?= $no++ ?> </td>
                                            <td><?= $value->tanggal ?></td>
											<td><?= $value->nm_waqif?> </td>
											<td><?= $value->lokasi_tanah?> </td>
											<td><?= $value->luas_tanah?> </td>
											<td><?= $value->no_sertifikat?> </td>
											<td><?= $value->nadzir?> </td>
											<td><?= $value->nm_penggarap?> </td>
											
										</tr>
									<?php 	}?>
									</tbody>
								</table>
							</div>
						</div>	
					</div>
				</div>
				<!-- Map Section -->

			</section>
			