
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">					
						<div class="col-lg-12">
							<div class="headeing pb-30">
								<div class="section-title">
                            <h4>JADWAL IMAM DAN BILAL TARAWIH </h4>
							<h4>MASJID AL-ISTIQOMAH TAHUN 1443 H</h4>
                        </div>
								<span class="b-line l-left line-h"></span>
							</div>			
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead class="dark-bg">
										<tr>					
											<th class="text-center">NO</th>
                                            <th class="text-center">Tanggal</th>
											<th class="text-center">Nama Imam </th>
											<th class="text-center">Nama Bilal</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($tarawih as $key => $value) { ?>
											
									
										<tr>
											<td class="text-center"> <?= $no++ ?> </td>
                                            <td><?= $value->tgl ?></td>
											<td><?= $value->nm_imam?> </td>
                                            <td><?= $value->nm_bilal?> </td>
											
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
			