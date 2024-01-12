<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.png')?>">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">>
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/admin/vendors/animate.css/animate.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/admin/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="login" style="background-color :  #1283b8">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo site_url('admin/login');?>" method="post">
              <h1 class="text-white">Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
              <button type="submit" class="btn btn-success login-button-lg" style="background-color :  #ffffff;color:black">Log in</button>
                <a class="reset_pass text-white" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link text-white">New to site?
                  <a href="#signup" class="to_register text-white"> Create Account </a>
                </p>
                <br />
                <div>
                  <h1 class="text-white"><i class="fa fa-paw text-white"></i> Saloka Pet</h1>
                  <p class="text-white">©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1 class="text-white">Create Account</h1>
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
                <a class="btn btn-default submit text-white" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link text-white">Already a member ?
                  <a href="#signin" class="to_register text-white"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 class="text-white"><i class="fa fa-paw"></i> Saloka Pet</h1>
                  <p class="text-white">-Selamat Datang-</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
