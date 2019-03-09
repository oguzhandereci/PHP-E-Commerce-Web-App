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
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>HAKKIMIZDA</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Hakkımızda</h1>
					<!--<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
					<div>
						<p>(800) 686-6688</p>
						<p>info.deercreative@gmail.com</p>
					</div>
					<div>
						<p>mm</p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Mon-Fri</p>
						<p>Sunday: Closed</p>
					</div>-->
					<?=$hakkimizda[0]->hakkimizda?>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Bizi Takip Edin</h1>
					<ul class="social d-flex flex-row">
						<li><a href="<?=$hakkimizda[0]->facebook?>" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?=$hakkimizda[0]->twitter?>" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?=$hakkimizda[0]->instagram?>" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>


		</div>
	</div>

<?php
    $this->load->view('on_panel/footer.php');  
?>