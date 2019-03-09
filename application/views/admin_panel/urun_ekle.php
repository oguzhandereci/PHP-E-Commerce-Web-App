 <?php
    $this->load->view('admin_panel/sidebar.php');
    $this->load->view('admin_panel/header.php');
 ?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ÜRÜNLER</h3>
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
                            <h2>Ürün Ekle</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />
                              
                            <form action="<?=base_url()?>admin_panel/urunler/ekle_kaydet/<?=$veri?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="urunAd" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Kodu <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="urunKod" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Kategorisi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-xs-12">
                                  <select  name="kategori" class="form-control">
                                    <option value="" disabled selected hidden>Ekleyeceğiniz ürünün kategorisini seçiniz.</option>
                                    <option value="1">Elektronik</option>
                                    <option value="2">Giyim</option>
                                    <option value="3">Kozmetik</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alış Fiyatı<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="aFiyat" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Satış Fiyatı<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="sFiyat" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Stok<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="stok" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Açıklaması<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="aciklama" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Anahtar Kelimeler<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="anahtarKelime" class="form-control col-md-7 col-xs-12" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Durumu<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-xs-12">
                                  <select  name="urunDurum" class="form-control">
                                    <option value="" disabled selected hidden>Ekleyeceğiniz ürünün durumunu belirtiniz.</option>
                                    <option>a</option>
                                    <option>b</option>
                                  </select>
                                </div>
                              </div>

                                
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Resim URL</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  class="form-control col-md-7 col-xs-12"  type="text" name="resim">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button class="btn btn-primary" type="button">Cancel</button>
                                  <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success" >Submit</button>
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