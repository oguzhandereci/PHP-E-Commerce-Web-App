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
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>ÜRÜN DETAYI</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1><?=$urun[0]->urun_ad ?></h1>
					<img src="<?=base_url()?>temp/<?=$urun[0]->urun_resim?>">
					</br></br>
					<iframe width="400" height="400" name="y"></iframe>
					<marquee direction="left" onMouseOver="this.stop()" onMouseOut="this.start()" width="250">
                        <?php foreach ($resim as $rs ) { ?>
                            <a href="<?=base_url()?>temp/<?=$rs->urun_resim_url?>" target="y"><img src="<?=base_url()?>temp/<?=$rs->urun_resim_url?>" width="60" height="60"></a>
                        <?php  }  ?>
                            
                    </marquee>

                    
					
					
		
					
				</div>

				<!-- Follow Us -->

				

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1><b>Ürün Fiyatı</b>: ₺<?=$urun[0]->urun_Sfiyat?></h1></br></br>
					<p><b>Ürün Kodu</b>: <?=$urun[0]->urun_kod?></p>
					<p><b>Ürün Açıklaması</b>: <?=$urun[0]->urun_aciklama?></p>
					<p><b>Stok Adedi</b>: <?=$urun[0]->urun_stok?></p>
					
				</div>
			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<form method="POST" action="<?=base_url()?>on_panel/home/yorum/<?=$urun[0]->urun_id?>">
						<div>
							<input id="uye_adsoy" value="<?=$this->session->uye_session['uye_adsoy'] ?>" class="form_input input_name input_ph" type="text" name="uye_adsoy" placeholder="Ad Soyad" required="required" data-error="Name is required.">

							<textarea id="yorum" class="input_ph input_message" name="yorum"  placeholder="Ürün için yorumlarınızı buraya yazınız." rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Gönder">send message</button>
						</div>

					</form>
					
				</div>
			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<form method="POST" action="<?=base_url()?>on_panel/home/yorum/<?=$urun[0]->urun_id?>">
						<div>
							<?php  foreach ($yorum as $rs) { ?>
								<p><h6><?=$this->session->uye_session['uye_adsoy'] ?></h6>: <?=$rs->yorum?>  <?=$rs->tarih_saat?> </p>
							 <?php } ?>
							
						</div>
					</form>
					
				</div>
			</div>





		</div>
	</div>

<?php
    $this->load->view('on_panel/footer.php');  
?>