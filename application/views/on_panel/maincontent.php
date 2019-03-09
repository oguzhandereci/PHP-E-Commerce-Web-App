

	<!-- Slider -->
	<?php foreach ($slider as $rs) { ?>
		<div class="main_slider" style="background-image:url(<?=base_url()?>temp/<?=$rs->slider_resim?>)">
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h6><?=$rs->slider_baslik2?></h6>
							<h1><?=$rs->slider_baslik1?></h1>
							<div class="red_button shop_now_button"><a href="<?=base_url()?>on_panel/home/kategoriler/<?=$rs->resim_kategori?>">İncele</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!--<div class="main_slider" style="background-image:url(<?=base_url()?>assets/on_panel/images/slider_2.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2017</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>-->



	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("main_slider");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 9000);    
	}
	</script>


	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/on_panel/images/elektronik.jpg)">
						<div class="banner_category">
							<a href="<?=base_url()?>/on_panel/home/elektronik">Elektronik</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/on_panel/images/giyim.jpg)">
						<div class="banner_category">
							<a href="<?=base_url()?>/on_panel/home/giyim">Giyim</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/on_panel/images/kozmetik.jpg)">
						<div class="banner_category">
							<a href="<?=base_url()?>/on_panel/home/kozmetik">Kozmetik</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Ürün Listesi</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">TÜMÜ</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".<?=$veri[0]->kategori_id ?>"><?=$veri[0]->kategori_ad ?></li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".<?=$veri[1]->kategori_id ?>"><?=$veri[1]->kategori_ad ?></li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".<?=$veri[2]->kategori_id ?>"><?=$veri[2]->kategori_ad ?></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<?php foreach ($urun as $rs) { ?>
							<div class="product-item <?=$rs->urun_kategori ?>">
								<div class="product discount product_filter">
									<div class="product_image">
										<a href="<?=base_url()?>/on_panel/home/urun_detay/<?=$rs->urun_id?>"><img src="<?=base_url()?>temp/<?=$rs->urun_resim?>" alt=""></a>
									</div>
									<div class="favorite favorite_left"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="<?=base_url()?>/on_panel/home/urun_detay/<?=$rs->urun_id?>"><?=$rs->urun_ad?></a></h6>
										<div class="product_price">₺<?=$rs->urun_Sfiyat?>.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>
						<?php } ?>


					</div>
				</div>
			</div>
		</div>
	</div>

