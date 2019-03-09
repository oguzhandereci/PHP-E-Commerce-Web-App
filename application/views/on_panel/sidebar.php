

<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Ürün Kategorileri</h5>
						</div>
						<ul class="sidebar_categories">
							<?php foreach ($veri as $rs) { ?>
								<li><a href="<?=base_url()?>on_panel/home/kategoriler/<?=$rs->kategori_ad?>"><?=$rs->kategori_ad?></a></li>	
							<?php }  ?>
						</ul>
					</div>

				</div>