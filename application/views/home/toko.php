<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Produk</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
<!-- products -->
<div class="product-section mt-150 mb-150">
		<div class="container">

			

			<div class="row product-lists">
            <?php foreach ($produk as $val){?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/gambar/'.$val->gambar); ?>" alt=""></a>
						</div>
						<h3><?php echo $val->namaProduk; ?></h3>
						<p class="product-price"><span>Per Kg</span> Rp.<?php echo $val->harga; ?> </p>
						<a href="<?php echo site_url('home/detailproduk/'.$val->idProduk);?>" class="cart-btn" style="background-color :  #1283b8"><i class="fas fa-shopping-cart" ></i> Detail</a>
					</div>
				</div>
                <?php } ?>
			</div>

			
			</div>
		</div>
	</div>
	<!-- end products -->