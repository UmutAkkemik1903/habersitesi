<?php include "header.php"; 


$menusor=$db->prepare("SELECT * from menu WHERE menu_id=:menu_id");
       $menusor->execute(array(
         'menu_id' => $_GET['menu_id']
        ));
        $menucek=$menusor->fetch(PDO::FETCH_ASSOC);


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
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" ><?php echo $menucek['menu_ad']; ?></a></h2>
												
												<p class="font-size-md"><?php echo $menucek['menu_detay']; ?></p>
												
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
			</div>

			<?php include "footer.php"; ?>		