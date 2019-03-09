<?php
  $this->load->view('admin_panel/sidebar.php');
  $this->load->view('admin_panel/header.php');
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>GİYİM</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Arama yapın..">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">ARA</button>
                    </span>
                 </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Listesi</h2>
                    <a href="<?=base_url()?>admin_panel/urunler/urun_ekle/giyim" class="btn btn-info pull-right" role="button"><i style="font-size: 20px" class="fa fa-plus-circle" aria-hidden="true"></i> Ürün Ekle</a>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                     <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Resim </th>
                            <th class="column-title">Ürün ID </th>
                            <th class="column-title">Ürün Adı</th>
                            <th class="column-title">Ürün Kodu</th>
                            <th class="column-title">Kategori</th>
                            <th class="column-title">Alış </th>
                            <th class="column-title">Satış </th>
                            <th class="column-title">Stok</th>
                            <th class="column-title">Açıklama</th>
                            <th class="column-title">Durum</th>
                            <th class="column-title">Resim Galerisi</th> 
                            <th class="column-title">İşlemler</th>
                            
                          </tr>
                        </thead>
                        <?php foreach ($veriler as $rs) { ?>
                          <tbody>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>

                              <td class=" ">
                                <?php if ($rs->urun_resim) {?>
                                <a href="<?=base_url()?>admin_panel/urunler/resim_ekle/giyim/<?=$rs->urun_id?>"><img src="<?=base_url()?>temp/<?=$rs->urun_resim?>" width="30" height="30"></a>
                              <?php }  
                                    else{ ?>
                                      <a href="<?=base_url()?>admin_panel/urunler/resim_ekle/giyim/<?=$rs->urun_id?>"><i class="fa fa-plus-circle" style="font-size: 25px" aria-hidden="true"></i></a>
                              <?php      }  ?>
                              </td>
                              <td class=" "><?=$rs->urun_id?></td>
                              <td class=" "><?=$rs->urun_ad?></td>
                              <td class=" "><?=$rs->urun_kod?></td>
                              <td class=" "><?=$rs->urun_kategori?></td>
                              <td class=" "><?=$rs->urun_Afiyat?></td>
                              <td class=" "><?=$rs->urun_Sfiyat?></td>
                              <td class="a-right a-right "><?=$rs->urun_stok?></td>
                              <td class=" "><?=$rs->urun_aciklama?></td>
                              <td class=" "><?=$rs->urun_durum?></td>
                              <td class=" "><a href="<?=base_url()?>admin_panel/urunler/galeri/<?=$rs->urun_id?>"><i class="fa fa-sign-in" style="font-size: 25px" aria-hidden="true"></i></a></td>
                              <td class=" ">
                                <a href="<?=base_url()?>admin_panel/urunler/urun_duzenle/<?=$rs->urun_id?>"><i class="fa fa-pencil" style="font-size: 25px" aria-hidden="true"></i></a>      
                                <a onclick="confirm('Silmek istediğinizden emin misiniz?')" href="<?=base_url()?>admin_panel/urunler/urun_sil/<?=$rs->urun_id?>"><i class="fa fa-trash" style="font-size: 25px;margin-left: 10px" aria-hidden="true"></i></a>
                              </td>
                            </tr>

                          </tbody>
                        <?php } ?>
                      </table>
                    </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- /page content -->

<?php
  $this->load->view('admin_panel/footer.php');
?>