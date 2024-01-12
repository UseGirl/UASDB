<!-- features list section -->
<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast" style="color :  #1283b8"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume" style="color :  #1283b8"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync" style="color :  #1283b8"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span style = "color: #1283b8">Produk</span> Kami</h3>
					</div>
				</div>
			</div>

			<div class="row">
			<?php foreach ($produk as $val){?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/gambar/'.$val->gambar); ?>" alt=""></a>
						</div>
						<h3><?php echo $val->namaProduk; ?></h3>
						<p class="product-price"><span>Per Biji</span> Rp.<?php echo $val->harga; ?> </p>
						<a href="<?php echo site_url('home/detailproduk/'.$val->idProduk);?>" class="cart-btn" style="background-color :  #1283b8" ><i class="fas fa-shopping-cart"></i> Detail</a>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100" >
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box" >
                        	<div class="inner-price" style="background-color :  #1283b8" >
                                <span class="price" >
                                    <strong>30%</strong> <br> off per pcs
                                </span>
                            </div>
                        </div>
                    	<img src="<?php echo base_url('assets/home/assets/img/slide4.jpeg')?>" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span style="color :  #1283b8">Deal</span> of the month</h3>
                    <h4>Hikan Strwaberry</h4>
                    <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix"style="color :  #1283b8" data-countdown="2024/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="cart.html" class="cart-btn mt-3" style="background-color :  #1283b8"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Diskon Spesial Hari Hewan Sedunia! <br> Dengan Diskon <span style="color:#1283b8">Besar-Besaran...</span></h3>
            <div class="sale-percent"><span style="color :  #1283b8">Sale! <br> Upto</span>50% <span style="color :  #1283b8">off</span></div>
            <a href="shop.html" class="cart-btn btn-lg" style="background-color :  #1283b8">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span style="color :  #1283b8">Our</span> News</h3>
						<p>Saloka Pet adalah tempat penjualan pakan dan menjual aksesoris terbaik untuk peliharan anda</p>
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn" style="background-color :  #1283b8">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->