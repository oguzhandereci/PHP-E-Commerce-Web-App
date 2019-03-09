<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yönetim Paneli Üye Girişi | urunmarkt.com </title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url()?>assets/admin_panel/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/admin_panel/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form action="<?=base_url()?>/admin_panel/login/login_islemi" method="POST">
              <h1>ÜYE GİRİŞİ</h1>
              <div>
                <input type="email" name="uName" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="password" name="pwd" class="form-control" placeholder="Password" required />
              </div>
              <div class="col-md-16">
                <button style="background-color:#8fbc8f " class="btn btn-default submit; col-md-6">GİRİŞ</button>
                <a class="reset_pass" href="#">Şifremi Unuttum</a>
              </div>
              <br><br><br>
              <?php if($this->session->flashdata("mesaj")) {?>
                <div class="alert alert-danger">
                  <p font-size="10px"><i class="fa fa-exclamation-triangle fa-8" aria-hidden="true"></i>   <?=$this->session->flashdata("mesaj") ?></p>
                </div>
              <?php } ?>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Bize katılın..  
                  <a href="#signup" class="to_register">Üye Ekle  </a>
                </p>
    
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> URUNMARKT</h1>
                  <p>©2018 All Rights Reserved. urunmarkt.com</p>
                </div>
              </div>
            </form>

          </section>
        </div>

        <!--<div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2017 All Rights Reserved. urun-burada.com</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>-->
    </div>
  </body>
</html>
