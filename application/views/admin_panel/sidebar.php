<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yönetim Paneli | urunmarkt.com </title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/admin_panel/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url()?>admin_panel/home" class="site_title"><i class="fa fa-paw"></i> <span>urun-burada</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url()?>temp/<?=$this->session->admin_session['resim']  ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldiniz,</span>
                <h2><?=$this->session->admin_session["adsoy"];  ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url()?>admin_panel/home"><i class="fa fa-home"></i> Anasayfa </a></li>
                  <li><a href="<?=base_url()?>admin_panel/kullanicilar"><i class="fa fa-user" aria-hidden="true"></i>Kullanıcılar</a></li>
                  <li><a><i class="fa fa-edit"></i> Ürün Kategori <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>admin_panel/urunler/elektronik">Elektronik</a></li>
                      <li><a href="<?=base_url()?>admin_panel/urunler/giyim/<?php $veriler?>">Giyim</a></li>
                      <li><a href="<?=base_url()?>admin_panel/urunler/kozmetik">Kozmetik</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=base_url()?>admin_panel/siparisler"><i class="fa fa-shopping-cart"></i> Siparişler </a></li>
                  <li><a href="<?=base_url()?>admin_panel/ayarlar"><i class="fa fa-gear"></i> Ayarlar </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>