<?php $this->load->view('on_panel/header.php');  ?>



	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="<?=base_url()?>on_panel/home">ANASAYFA</a></li>
						<li class="active"><a href="<?=base_url()?>on_panel/home/kategoriler/<?=$veri[2]->kategori_ad?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$veri[2]->kategori_ad?></a></li>
					</ul>
				</div>

				<!-- Sidebar -->
				<?php $this->load->view('on_panel/sidebar.php');  ?>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<div class="product-grid">


									<?php foreach ($urun as $rs) { ?>
									<?php if ($rs->urun_kategori == '3') { ?>
										<div class="product-item <?=$rs->urun_kategori ?>">
											<div class="product discount product_filter">
												<div class="product_image">
													<a href="<?=base_url()?>/on_panel/home/urun_detay/<?=$rs->urun_id?>"><img src="<?=base_url()?>temp/<?=$rs->urun_resim?>" alt=""></a>
												</div>
												<div class="favorite favorite_left"></div>
												<div class="product_info">
													<h6 class="product_name"><a href="single.html"><?=$rs->urun_ad?></a></h6>
													<div class="product_price">₺<?=$rs->urun_Sfiyat?>.00</div>
												</div>
											</div>
											<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
										</div>
									<?php } ?>
										
									<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->


<?php $this->load->view('on_panel/footer.php');  ?>

