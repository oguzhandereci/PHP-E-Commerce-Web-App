 <?php
    $this->load->view('admin_panel/sidebar.php');
    $this->load->view('admin_panel/header.php');
 ?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>KULLANICI DÜZENLEME FORMU</h3>
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
                            <h2>Kullanıcı Düzenle</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />
                            <form action="<?=base_url()?>admin_panel/kullanicilar/duzenle_kaydet/<?=$veri[0]->id?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad - Soyad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="adsoy" value="<?=$veri[0]->adsoy?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kullanıcı Adı <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="kadi" value="<?=$veri[0]->kAdi?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Parola<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="pwd" value="<?=$veri[0]->sifre?>" class="form-control col-md-7 col-xs-12" required="required" type="password" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cinsiyet</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div id="gender" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Erkek">  Erkek 
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Bayan"> Bayan
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Doğum Tarihi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="dtarih" class="form-control col-md-7 col-xs-12" type="date" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Üyelik Türü <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-xs-12">
                                  <select  name="yetki" class="form-control">
                                    <option value="" disabled selected hidden><?=$veri[0]->yetki?></option>
                                    <option>Editör</option>
                                    <option>Satıcı</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Üye Durumu</label>
                                <div class="col-md-6 col-xs-12">
                                  <select name="durum" class="form-control">
                                    <option value="" disabled selected hidden><?=$veri[0]->durum?></option>
                                    <option>Aktif</option>
                                    <option>Pasif</option>
                                  </select>
                                </div>
                              </div>  
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Resim URL</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input  class="form-control col-md-7 col-xs-12"  type="text" name="resim" value="<?=$veri[0]->resim?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="resizable_textarea form-control" name="adres"><?=$veri[0]->adres?></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input value="<?=$veri[0]->tel?>"  class="form-control col-md-7 col-xs-12"  type="text" name="tel">
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