<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$meta[0]->name?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="">
<meta name="description" content="<?=$meta[0]->description?>">
<meta name="keywords" content="<?=$meta[0]->keywords?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/bootstrap4/bootstrap.min.css">
<link href="<?=base_url()?>assets/on_panel/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="<?=base_url()?>assets/on_panel/plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/on_panel/styles/categories_responsive.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  



</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">ALIŞVERİŞİN UĞURLU ADRESİ</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<?php if ($this->session->uye_session) { ?>
									<li class="account">
										<a href="#">
											<?=$this->session->uye_session['uye_adsoy'] ?>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="account_selection">
											
											<li><a href="<?=base_url()?>on_panel/login/logout_islemi"><i class="fa fa-sign-out" aria-hidden="true"></i>Çıkış</a></li>
										</ul>
									</li>
								<?php }  else {?>
								<li class="account">
									<a href="#">
										Üye İşlemleri
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="<?=base_url()?>on_panel/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Giriş</a></li>
										<li><a href="<?=base_url()?>on_panel/login/register"><i class="fa fa-user-plus" aria-hidden="true"></i>Üye Ol</a></li>
									</ul>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="<?=base_url()?>on_panel/home">ÜRÜN<span>MARKT</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="<?=base_url()?>on_panel/home">ANASAYFA</a></li>
								<li>
									<div class="dropdown">
								  		<a class="dropbtn" >KATEGORİLER <i class="fa fa-angle-down"></i></a>
								  		<div class="dropdown-content">
								  			<?php foreach ($veri as $rs) { ?>
								  				<a style="text-align:left;" href="<?=base_url()?>on_panel/home/kategoriler/<?=$rs->kategori_ad?>"><?=$rs->kategori_ad?></a>
								  			<?php }  ?>
								  		</div>
									</div>
								</li>
								<li><a href="<?=base_url()?>on_panel/home/hakkimizda">HAKKIMIZDA</a></li>
								<li><a href="<?=base_url()?>on_panel/home/iletisim">İLETİŞİM</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="">
						HESABIM
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="<?=base_url()?>on_panel/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Giriş Yap</a></li>
						<li><a href="<?=base_url()?>on_panel/login/register"><i class="fa fa-user-plus" aria-hidden="true"></i>Yeni Hesap Oluştur</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="<?=base_url()?>on_panel/home">ANASAYFA</a></li>
				<li class="menu_item has-children">
					<a href="">
						KATEGORİLER
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<?php foreach ($veri as $rs) { ?>
							<li><a style="text-align:right;" href="<?=base_url()?>on_panel/home/kategoriler/<?=$rs->kategori_ad?>"><?=$rs->kategori_ad?></a></li>
			  			<?php }  ?>
					</ul>
				</li>
				<li class="menu_item"><a href="<?=base_url()?>on_panel/home/hakkimizda">HAKKIMIZDA</a></li>
				<li class="menu_item"><a href="<?=base_url()?>on_panel/home/iletisim">İLETİŞİM</a></li>
			</ul>
		</div>
	</div>