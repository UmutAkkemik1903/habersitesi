
<?php include "header.php";
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC); ?>


			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bize Ulaşın</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Görüşlerinizi ve şikayetlerinizi bize iletin.</p>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form id="contact-form" action="http://www.emrahyuksel.com.tr/phpmail/index.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Adınız Ve Soyadınız" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control input-lg" name="name" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="Mailiniz" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Konu" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Please enter your message." rows="5" class="form-control input-lg" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Gönder" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Our Office</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Adres Bilgisi:</strong> <?php echo $ayarcek['ayar_adres'] ?></li>
								<li><i class="fa fa-phone"></i> <strong>Telefon Bilgisi:</strong> <?php echo $ayarcek['ayar_tel'] ?></li>
								<li><i class="fa fa-envelope"></i> <strong>Email Bilgisi:</strong> <a href="mailto:umutakkemik@gmail.com"><?php echo $ayarcek['ayar_mail'] ?></a></li>
							</ul>

							<h4 class="pt-xl mb-none">Mesai Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<p><?php echo $ayarcek['ayar_mesai'] ?></p>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer">
				<iframe
				width="100%"
				height="100%"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_googlemap']; ?>&q=<?php echo $ayarcek['ayar_adres']; ?>" allowfullscreen>
				</iframe>
				
				
				</div>
			</div>

            <?php include "footer.php"; ?>