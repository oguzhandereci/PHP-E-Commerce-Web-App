<?php
    $this->load->view('admin_panel/sidebar.php');
    $this->load->view('admin_panel/header.php');
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Site Ayarları</h3>
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
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <?php if ($this->session->flashdata("sonuc") ) { ?>
                          <div class="alert alert-info alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <?=$this->session->flashdata("sonuc") ?>
                          </div>

                        <?php } ?>
                                                
                        <div class="x_title"></div>
                        
                        
                        <div class="x_content">

                          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#genel" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel</a>
                              </li>
                              <li role="presentation" class=""><a href="#email" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Email</a>
                              </li>
                              <li role="presentation" class=""><a href="#sosyal" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal</a>
                              </li>
                             
                            </ul>

                              <div id="myTabContent" class="tab-content">

                                <div role="tabpanel" class="tab-pane fade active in" id="genel" aria-labelledby="home-tab">
                                  <div class="x_content">
                                    <br />
                                    <form method="POST" action="<?=base_url()?>admin_panel/ayarlar/ayar_guncelle/genel/<?=$ayarlar[0]->ayar_id?>"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adı <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->ayar_adi?>" type="text" name="sitead" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description<span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->description?>" type="text"  name="description" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->keywords?>" class="form-control col-md-7 col-xs-12" type="text" name="keywords">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->adres?>" class="form-control col-md-7 col-xs-12" type="text" name="adres">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->tel?>" class="form-control col-md-7 col-xs-12" type="text" name="tel">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Şehir</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->sehir?>" class="form-control col-md-7 col-xs-12" type="text" name="sehir">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hakkımızda</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <textarea class="CKEDITOR" id="hakkimizda" name="hakkimizda"><?=$ayarlar[0]->hakkimizda?>
                                          </textarea>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İletişim</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <textarea class="CKEDITOR" id="iletisim" name="iletisim"><?=$ayarlar[0]->iletisim?>
                                          </textarea>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="ln_solid"></div>
                                      <button class="btn btn-success" type="submit">GÜNCELLE</button>

                                    </form>
                                  </div>
                                </div>



                                <div role="tabpanel" class="tab-pane fade" id="email" aria-labelledby="profile-tab">
                                  <div class="x_content">
                                    <br />
                                    <form method="POST" action="<?=base_url()?>admin_panel/ayarlar/ayar_guncelle/email/<?=$ayarlar[0]->ayar_id?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Server</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->smtp_server?>" class="form-control col-md-7 col-xs-12" type="text" name="smtp_server">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Email</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->smtp_email?>" class="form-control col-md-7 col-xs-12" type="text" name="smtp_email">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Port</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->smtp_port?>" class="form-control col-md-7 col-xs-12" type="text" name="smtp_port">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Şifre</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->smtp_pass?>" class="form-control col-md-7 col-xs-12" type="password" name="smtp_pass">
                                        </div>
                                      </div>

                                       <button class="btn btn-success" type="submit">GÜNCELLE</button>                                      
                                    </form>
                                  </div>
                                </div>



                                <div role="tabpanel" class="tab-pane fade" id="sosyal" aria-labelledby="profile-tab2">
                                  <div class="x_content">
                                    <br />
                                    <form method="POST" action="<?=base_url()?>admin_panel/ayarlar/ayar_guncelle/sosyal/<?=$ayarlar[0]->ayar_id?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->facebook?>" class="form-control col-md-7 col-xs-12" type="text" name="facebook">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->instagram?>" class="form-control col-md-7 col-xs-12" type="text" name="instagram">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                          <input value="<?=$ayarlar[0]->twitter?>" class="form-control col-md-7 col-xs-12" type="text" name="twitter">
                                        </div>
                                      </div>

                                      <button class="btn btn-success" type="submit">GÜNCELLE</button>
                                    </form>
                                  </div>
                                </div>

                              </div>


                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
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



<script type="text/javascript">
    CKEDITOR.replaceAll( function(textarea,config) {
    if (textarea.className!="CKEDITOR") return false; //for only assign a class
                     config.enterMode = CKEDITOR.ENTER_BR,
                config.shiftEnterMode = CKEDITOR.ENTER_P,
          config.filebrowserBrowseUrl = '_filebrowse.php?type=Images',
          config.filebrowserUploadUrl = '_fileupload.php?type=Files'  
});

</script>

