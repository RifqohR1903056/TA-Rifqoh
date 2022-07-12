
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">					
						<div class="col-lg-12">
							<div class="headeing pb-30">
								<div class="section-title">
                            <h3>INFO PENCERAMAH MAJELIS TA'LIM</h2>
                        </div>
								<span class="b-line l-left line-h"></span>
							</div>			
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead class="dark-bg">
										<tr>					
											<th class="text-center">NO</th>
                                            <th class="text-center">Tanggal</th>
											<th class="text-center">Nama Penceramah </th>
											<th class="text-center">Keterangan</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($majelis as $key => $value) { ?>
											
									
										<tr>
											<td class="text-center"> <?= $no++ ?> </td>
                                            <td><?= $value->tgl ?></td>
											<td><?= $value->nm_penceramah?> </td>
                                            <td><?= $value->keterangan?> </td>
											
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
			