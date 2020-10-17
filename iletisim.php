<?php
include 'header.php';
?>


			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">İletişim & Adres</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Başarılı</strong> Mesajınız tarafımıza iletilmiştir.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Hatalı!</strong> Mesajınızı gönderirken bir hata oluştu.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="İsminiz.." value="" data-msg-required="Lütfen isim girin." maxlength="100" class="form-control input-lg" name="name" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="E-mail adresiniz.." value="" data-msg-required="Lütfen mailini girin." data-msg-email="Lütfen geçerli email girin" maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Konu" value="" data-msg-required="Lütfen konuyu girin." maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Mesaj yazınız.." data-msg-required="Lütfen Mesaj girin." rows="5" class="form-control input-lg" name="message" id="message" required></textarea>
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

							<h4 class="mt-xl mb-none">Bize Ulaşın</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo $ayarcek['ayar_adres'];?>
								<br> <?php echo $ayarcek['ayar_ilce'];?> / <?php echo $ayarcek['ayar_il'];?></li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong><?php echo $ayarcek['ayar_tel'];?></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"><?php echo $ayarcek['ayar_mail'];?></a></li>
							</ul>

							<h4 class="pt-xl mb-none">Çalışma Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
                            <?php echo $ayarcek['ayar_mesai'];?>

						</div>
					</div>
				</div>
				
				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer"></div>
            </div>
<?php
include 'footer.php';
?>