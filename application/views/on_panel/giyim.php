<?php $this->load->view('on_panel/header.php');  ?>



	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="<?=base_url()?>on_panel/home">ANASAYFA</a></li>
						<li class="active"><a href="<?=base_url()?>on_panel/home/kategoriler/<?=$veri[1]->kategori_ad?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$veri[1]->kategori_ad?></a></li>
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
									<?php if ($rs->urun_kategori == '2') { ?>
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


	<!-- Footer -->


<?php $this->load->view('on_panel/footer.php');  ?>

