<?php
    $this->load->view('on_panel/header.php');  
?>	

	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">ANASAYFA</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>İLETİŞİM</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Map Container -->

		<!--<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>İletişim Bilgileri</h1>
					
					<?=$iletisim[0]->iletisim?>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Bizi Takip Edin</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Bizimle İletişime Geçin!</h1>
					<p>Aşağıdaki formu doldurarak istek ve görüş bildirebilirsiniz</p>

					<?php if ($this->session->flashdata("sonuc") ) { ?>
                          <div class="alert alert-info alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?=$this->session->flashdata("sonuc") ?>
                          </div>

                    <?php } ?>

					<form action="<?=base_url()?>on_panel/home/mesaj_gonder" method="POST">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="İsim" required="required" data-error="Name is required.">

							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="E-mail" required="required" data-error="Valid email is required.">

							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Mesajınız" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Gönder">send message</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

<?php
    $this->load->view('on_panel/footer.php');  
?>