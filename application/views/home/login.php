<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login Pelanggan</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    
    <link rel="manifest" href="<?php echo base_url('assets/admin2/dist/assets/favicon/manifest.json')?>">
    <meta name="msapplication-TileColor" content="#1283b8">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <meta name="theme-color" content="#1283b8">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin2/dist/vendors/simplebar/css/simplebar.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin2/dist/css/vendors/simplebar.css')?>">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/admin2/dist/css/style.css')?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="<?php echo base_url('assets/admin2/dist/css/examples.css')?>" rel="stylesheet">
  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                    
                  </div>
                  <br/>
                  <h1>Login Pelanggan</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <form action="<?php echo site_url('home/cek_login');?>" method="post">
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-user')?>"></use>
                        </svg></span>
                      <input class="form-control" name="username" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="">
                    </div>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')?>"></use>
                        </svg></span>
                      <input class="form-control" name="password" type="password" placeholder="Password" aria-describedby="inputGroupPrepend2" required="">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="btn px-4 text-white" style="background-color: #1283b8;" type="submit">Login</button>
                      </div>
                      <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card col-md-5 text-white py-5" style="background-color: #1283b8;">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Untuk pelanggan/pengguna baru silahkan membuat akun terlebih dahulu agar bisa melakukan transaksi.</p>
                    <p>Klik Tombol Dibawah</p>
                    <p><svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-thick-bottom')?>"></use>
                      </svg></p>
                    <a href="<?php echo site_url('pelanggan/register');?>" class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets/admin2/dist/vendors/@coreui/coreui/js/coreui.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin2/dist/vendors/simplebar/js/simplebar.min.js')?>"></script>
    <script>
    </script>

  </body>
</html>