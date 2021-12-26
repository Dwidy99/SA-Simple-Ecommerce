<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
				</div>
			</div>
		</div>
		<div class="item item2"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>Summer <span>Collection</span></h3>
					<p>New Arrivals On Sale</p>
					<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
				</div>
			</div>
		</div>
		<div class="item item3"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
				</div>
			</div>
		</div>
		<div class="item item4"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>Summer <span>Collection</span></h3>
					<p>New Arrivals On Sale</p>
					<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
				</div>
			</div>
		</div>
		<div class="item item5"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
				</div>
			</div>
		</div> 
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div> 
<!-- //banner -->
<div class="banner_bottom_agile_info">
	<div class="container">
		<div class="banner_bottom_agile_info_inner_w3ls">
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="<?= base_url('assets/'); ?>images/bottom1.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>F</span>all Ahead</h3>
						<p>New Arrivals</p>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="<?= base_url('assets/'); ?>images/bottom2.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>F</span>all Ahead</h3>
						<p>New Arrivals</p>
					</figcaption>			
				</figure>
			</div>
			<div class="clearfix"></div>
		</div> 
	</div> 
</div>
<!-- schedule-bottom -->


<!--/grids-->
<div class="agile_last_double_sectionw3ls">
	<div class="col-md-6 multi-gd-img multi-gd-text ">
		<a href="womens.html"><img src="<?= base_url('assets/'); ?>images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>

	</div>
	<div class="col-md-6 multi-gd-img multi-gd-text ">
		<a href="womens.html"><img src="<?= base_url('assets/'); ?>images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
	</div>
	<div class="clearfix"></div>
</div>							
<!--/grids-->
<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<li> Men's</li>
				<li> Women's</li>

			</ul>
			<div class="resp-tabs-container">
				<!--/tab_one-->
				<div class="tab1">
					<?php foreach ($men as $man) : ?>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?= base_url('assets/images/'.$man['tshirt_image']); ?>" alt="<?= $man['tshirt_name']; ?>" class="pro-image-front">
									<img src="<?= base_url('assets/images/'.$man['tshirt_image']); ?>" alt="<?= $man['tshirt_name']; ?>" class="pro-image-back">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="<?= base_url('home/detail_barang/'.$man['sluga']); ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="<?= base_url('home/detail_barang/'.$man['sluga']); ?>"><?php echo $man['tshirt_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price">Rp. <?php echo $man['tshirt_price']; ?></span>
										<del>Rp. <?php echo $man['harga_coret']; ?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
										<?php echo form_open('home/beli'); ?>
										<fieldset>
											<input type="hidden" name="id" value="<?= $man['id']; ?>">
											<input type="hidden" name="tshirt_name" value="<?= $man['tshirt_name']; ?>">
											<input type="hidden" name="tshirt_price" value="<?= $man['tshirt_price']; ?>">
											<input type="hidden" name="tshirt_image" value="<?= $man['tshirt_image']; ?>">
											<input type="hidden" name="qty" value="1">
											<input type="submit" name="cart" value="Add to cart" class="button" >
										</fieldset>
										<?php echo form_close(); ?>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="clearfix"></div>
				</div>
				<!--//tab_one-->
				<!--/tab_two-->
				<div class="tab2">
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w1.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w1.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">A-line Black Skirt</a></h4>
								<div class="info-product-price">
									<span class="item_price">$130.99</span>
									<del>$189.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w2.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w2.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
								<div class="info-product-price">
									<span class="item_price">$140.99</span>
									<del>$189.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w3.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w3.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Skinny Jeans</a></h4>
								<div class="info-product-price">
									<span class="item_price">$150.99</span>
									<del>$189.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w4.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w4.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Black Basic Shorts</a></h4>
								<div class="info-product-price">
									<span class="item_price">$120.99</span>
									<del>$189.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w5.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w5.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Pink Track Pants</a></h4>
								<div class="info-product-price">
									<span class="item_price">$220.99</span>
									<del>$389.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w6.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w6.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Analog Watch</a></h4>
								<div class="info-product-price">
									<span class="item_price">$320.99</span>
									<del>$489.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w7.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w7.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Ankle Length Socks</a></h4>
								<div class="info-product-price">
									<span class="item_price">$100.99</span>
									<del>$159.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?= base_url('assets/'); ?>images/w8.jpg" alt="" class="pro-image-front">
								<img src="<?= base_url('assets/'); ?>images/w8.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single.html">Reebok Women's Tights</a></h4>
								<div class="info-product-price">
									<span class="item_price">$130.99</span>
									<del>$169.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

								</div>

							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--//tab_two-->


			</div>
		</div>	
	</div>
</div>
<!-- //new_arrivals --> 
<!-- /we-offer -->
<div class="sale-w3ls">
	<div class="container">
		<h6>We Offer Flat <span>40%</span> Discount</h6>

		<a class="hvr-outline-out button2" href="single.html">Shop Now </a>
	</div>
</div>
<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE SHIPPING</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>24/7 SUPPORT</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MONEY BACK GUARANTEE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE GIFT COUPONS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!--grids-->