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
                            <h2>Resim Ekle</h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />


                            <?php  if($this->session->flashdata("mesaj")) {  ?>
                              <div class="alert alert-warning alert-dismissible fade in">
                                <h4>HATA</h4>
                                <p><?=$this->session->flashdata("mesaj")?></p>
                              </div>
                            <?php } ?>
                              
                            <form action="<?=base_url()?>admin_panel/urunler/resim_kaydet/<?=$kategori?>/<?=$id?>" enctype="multipart/form-data" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" name="resim" required="required" class="form-control col-md-10 col-xs-12">
                                  
                                </div>
                                <div><button type="submit" class="btn btn-success col-md-3" >Submit</button></div>
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