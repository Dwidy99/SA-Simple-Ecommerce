<div class="page-head_agile_info_w3l">
	<div class="container">
		<h3> Produk <span>Yang Di Cari  </span></h3>
		<!--/w3_short-->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">

				<ul class="w3_short">
					<li><a href="<?= base_url(); ?>">Home</a><i>|</i></li>
					<li>Produk</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
	</div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<!-- mens -->
		<div class="col-md-4 products-left">
			
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
				<?php foreach ($data_kategori as $data) : ?>
					<li>
						<label for="item-0">
							<a href="<?= base_url('kategori_produk/'.$data['brand_name']); ?>">
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?= $data['brand_name']; ?>
							</a>
						</label>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
			<div class="community-poll">
				<h4>Community Poll</h4>
				<div class="swit form">	
					<form>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>	
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>	
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>		
						<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
		<?php if (count($kategoribrand) > 0) : ?>
			<?php foreach($kategoribrand as $produk) : ?>
			<div class="col-md-4 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="<?= base_url('assets/images/'.$produk['tshirt_image']); ?>" alt="<?= $produk['tshirt_name']; ?>" class="pro-image-front">
						<img src="<?= base_url('assets/images/'.$produk['tshirt_image']); ?>" alt="<?= $produk['tshirt_name']; ?>" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="single.html" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>

					</div>
					<div class="item-info-product ">
						<h4><a href="single.html"><?= $produk['tshirt_name']; ?></a></h4>
						<div class="info-product-price">
							<span class="item_price">Rp. <?= number_format($produk['tshirt_price'], 2, ", ", "."); ?></span><br>
							<del>Rp. <?= number_format($produk['harga_coret'], 2, ", ", "."); ?></del>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>

					</div>
				</div>
			</div>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="alert alert-info">Maaf, Produk yang anda cari kosong!</div>
		<?php endif; ?>

			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
