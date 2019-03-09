 <?php
    $this->load->view('admin_panel/sidebar.php');
    $this->load->view('admin_panel/header.php');
 ?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ÜRÜN DÜZENLEME FORMU</h3>
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

                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Ürün Düzenle</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />
                            <form action="<?=base_url()?>admin_panel/urunler/duzenle_kaydet/<?=$veri[0]->urun_kategori?>/<?=$veri[0]->urun_id?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="urunAd" value="<?=$veri[0]->urun_ad?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Kodu <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="urunKod" value="<?=$veri[0]->urun_kod?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Alış Fiyatı<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="Afiyat" value="<?=$veri[0]->urun_Afiyat?>" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Satış Fiyatı</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="Sfiyat" value="<?=$veri[0]->urun_Sfiyat?>" class="form-control col-md-7 col-xs-12" type="text" >
                                </div>
                              </div>
                              
                              
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Stok Adedi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  class="form-control col-md-7 col-xs-12"  type="text" name="stok" value="<?=$veri[0]->urun_stok?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Açıklaması</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input value="<?=$veri[0]->urun_aciklama?>"  class="form-control col-md-7 col-xs-12"  type="text" name="aciklama">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Anahtar Kelimeler</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input value="<?=$veri[0]->urun_Akelime?>"  class="form-control col-md-7 col-xs-12"  type="text" name="Akelime">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürünün Durumu<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-xs-12">
                                  <select  name="durum" class="form-control">
                                    <option value="" disabled selected hidden><?=$veri[0]->urun_durum?></option>
                                    <option>a</option>
                                    <option>b</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Resmi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input value="<?=$veri[0]->urun_resim?>"  class="form-control col-md-7 col-xs-12"  type="text" name="resim">
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button class="btn btn-primary" type="button">İPTAL</button>
                                  <button class="btn btn-primary" type="reset">SIFIRLA</button>
                                  <button type="submit" class="btn btn-success" >GÖNDER</button>
                                </div>
                              </div>

                            </form>
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