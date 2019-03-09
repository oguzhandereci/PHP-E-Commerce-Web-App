 <?php
    $this->load->view('admin_panel/sidebar.php');
    $this->load->view('admin_panel/header.php');
 ?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>KULLANICILAR</h3>
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
                    <h2 class="col-md-5 title_left">Kullanıcı Listesi</h2> 
                    <?=$this->session->flashdata("sonuc") ?>  
                    <a href="<?=base_url()?>admin_panel/kullanicilar/kullanici_ekle" class="btn btn-info pull-right" role="button"><i style="font-size: 20px" class="fa fa-user-plus" aria-hidden="true"></i> Kullanıcı Ekle</a> 
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
                            <th class="column-title">Üye ID </th>
                            <th class="column-title">Kullanıcı Adı</th>
                            <th class="column-title"> Ad - Soyad </th>
                            <th class="column-title"> Cinsiyet </th>
                            <th class="column-title">Yetki </th>
                            <th class="column-title">Durum </th>
                            <th class="column-title">Adres </th>
                            <th class="column-title">Tel </th>
                            <th class="column-title">İşlemler </th>
                            
                          </tr>
                        </thead>
                        <?php foreach ($veriler as $rs) { ?>
                          <tbody>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><img src="<?=base_url()?>temp/<?=$rs->resim?>" width="30" height="30"></td>
                              <td class=" "><?=$rs->id?></td>
                              <td class=" "><?=$rs->kAdi?></td>
                              <td class=" "><?=$rs->adsoy?></td>
                              <td class=" "><?=$rs->cinsiyet?></td>
                              <td class=" "><?=$rs->yetki?></td>
                              <td class="a-right a-right "><?=$rs->durum?></td>
                              <td class=" "><?=$rs->adres?></td>
                              <td class=" "><?=$rs->tel?></td>
                              <td class=" ">
                                <a href="<?=base_url()?>admin_panel/kullanicilar/kullanici_duzenle/<?=$rs->id?>"><i class="fa fa-pencil" style="font-size: 25px" aria-hidden="true"></i></a>      
                                <a onclick="confirm('Silmek istediğinizden emin misiniz?')" href="<?=base_url()?>admin_panel/kullanicilar/kullanici_sil/<?=$rs->id?>"><i class="fa fa-trash" style="font-size: 25px;margin-left: 10px" aria-hidden="true"></i></a>
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
        <!-- /page content -->

<?php
    $this->load->view('admin_panel/footer.php');
    
?>