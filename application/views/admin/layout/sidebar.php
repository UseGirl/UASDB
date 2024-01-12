<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Saloka Pet</title>
    
    
    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin2/dist/vendors/simplebar/css/simplebar.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin2/dist/css/vendors/simplebar.css')?>">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/admin2/dist/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/chartjs/css/coreui-chartjs.css')?>" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" style="color:#006D5B;" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex" >
        <p>Admin Saloka Pet </p>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/dashboard')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-speedometer')?>"></use>
            </svg> Dashboard</a></li>
            <li class="nav-title">Manage</li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('kategori')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-drop')?>"></use>
            </svg> Kategori</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ongkir')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-pencil')?>"></use>
            </svg> Ongkir</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pelanggan')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-drop')?>"></use>
            </svg> Pelanggan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('produk')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-pencil')?>"></use>
            </svg> Produk</a></li>
        <li class="nav-title">Other</li>
        <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-chart-pie')?>"></use>
            </svg> Ganti Password</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/logout')?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-chart-pie')?>"></use>
            </svg> Logout</a></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>