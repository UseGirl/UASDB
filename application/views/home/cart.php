<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p style="color:white"></p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Produk</th>
									<th class="product-name">Nama</th>
									<th class="product-price">Harga</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($cartItems as $item) {?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="<?php echo site_url('home/delete_cart/'.$item["rowid"]);?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="<?php echo base_url('assets/gambar/'.$item['image']); ?>" alt=""></td>
									<td class="product-name"><?php echo $item['name']; ?></td>
									<td class="product-price">Rp.<?php echo $item['price']; ?></td>
									<td class="product-quantity"><?php echo $item['qty']; ?></td>
									<td class="product-total">Rp.<?php echo $item['price']*$item['qty']; ?></td>
								</tr>
                                <?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>Rp.<?php echo  $total;?></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="<?php  echo site_url('midtrans/index');?>" class="boxed-btn black" style="background-color :  #1283b8">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" style="background-color :  #1283b8; color:white"value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->