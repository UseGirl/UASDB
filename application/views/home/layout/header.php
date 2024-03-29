<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Saloka Pet</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/admin2/dist/assets/favicon/logo1.pngt')?>">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/all.min.css')?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/bootstrap/css/bootstrap.min.css')?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/owl.carousel.css')?>">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/magnific-popup.css')?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/animate.css')?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/meanmenu.min.css')?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/styles.css')?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/responsive.css')?>">

</head>
<body style="color:#006D5B;">
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?php echo site_url(); ?>">
								<H2 style = "color:#7cb881">Saloka Pet</H2>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<?php if(empty($this->session->userdata("Pelanggan"))) {?>
						<nav class="main-menu" >
							<ul style="color:#006D5B;">
								<li class="current-list-item" ><a href="<?php echo site_url('home')?> ">Home</a></li>
								<li><a href="<?php echo site_url('home/toko')?>">Produk</a></li>
								<li><a href="#">Kategori</a>
									<ul class="sub-menu">
									<?php foreach($kategori as $val){?>
										<li><a href="<?php echo base_url('home'.$val->idKat); ?>"><?php echo $val->namaKat?></a></li>
										<?php } ?>
									</ul>
								</li>
								<li><a href="#">Akun</a>
									<ul class="sub-menu">
										<li><a href="<?php echo site_url('home/login')?>">Login</a></li>
										<li><a href="<?php echo site_url('pelanggan/register')?>">Register</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<?php } else { ?>
							<nav class="main-menu">
							<ul style="color:#006D5B;">
								<li class="current-list-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
								<li><a href="<?php echo site_url('home/toko')?>">Produk</a></li>
								<li><a href="#">Kategori</a>
									<ul class="sub-menu">
									<?php foreach($kategori as $val){?>
										<li><a href="<?php echo base_url('home'.$val->idKat); ?>"><?php echo $val->namaKat?></a></li>
										<?php } ?>
									</ul>
								</li>
								<li><a href="#">Akun</a>
									<ul class="sub-menu">
										<li><a href="<?php echo site_url('home/logout')?>">Logout</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="<?php echo site_url('home/cart')?>"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										
									</div>
								</li>
							</ul>
						</nav>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

    <!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit" style="background-color :  #1283b8">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->