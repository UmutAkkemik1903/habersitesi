<?php include "header.php"; 


$iceriksor=$db->prepare("SELECT * from icerik WHERE icerik_id=:icerik_id");
       $iceriksor->execute(array(
         'icerik_id' => $_GET['icerik_id']
        ));
        $icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);


?>
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Haberler</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="row">

			
                        
                      

                            <div class="col-md-12">
                            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none ">
											
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="haber-detay.php"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
												<span class="post-meta">
													<span><?php echo $icerikcek['icerik_zaman']; ?> | </a></span>
												</span>
												<p style="font-size:16px !important;"><?php echo $icerikcek['icerik_detay']; ?></p>

												<hr>
												<p style="font-size: 15px ;"><b>Anahta Kelimeler : </b>
												
												<?php $etiketler=explode(', ',$icerikcek['icerik_keyword']);

											
												foreach ($etiketler as $etiketbas) { ?>
													
													<a href="arama?aranan=<?php echo $etiketbas; ?>"><?php echo $etiketbas; ?></a>
												<?php }
												
												?>
												
												</p>

												
											</span>
										</span>
									</span>
                            </div>

					
                            </div>

						</div>

						<?php include 'rightbar.php' ; ?>
					</div>

				</div>
			</div>

			<?php include "footer.php"; ?>		