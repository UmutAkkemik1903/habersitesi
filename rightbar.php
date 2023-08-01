<?php 
$haksor=$db->prepare("SELECT * from hakkimizda where hak_id=?");
$haksor->execute(array(0));
$hakcek=$haksor->fetch(PDO::FETCH_ASSOC);
?>

			<div class="col-md-3">
                <aside class="sidebar">

							<h4 class="mt-xl mb-md"><?php echo $hakcek['hak_baslik']; ?></h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="embed-responsive embed-responsive-16by9 mb-xl">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $hakcek['hak_video'] ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                           
                            <h4 class="mt-xl mb-md">Vizyonumuz</h4>
							<div class="divider divider-primary divider-small mb-xl">
							<hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg"><?php echo $hakcek['hak_vizyon']; ?></p>
					
								Vizyonumuz</footer>
							</blockquote>

	
							<h4 class="mt-xl mb-md">Misyonumuz</h4>
							<div class="divider divider-primary divider-small mb-xl">
							<hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg"><?php echo $hakcek['hak_misyon']; ?></p>
					
							
								Misyonumuz</footer>
							</blockquote>

							



						</div>
					</div>
				</div>
			</div>

			