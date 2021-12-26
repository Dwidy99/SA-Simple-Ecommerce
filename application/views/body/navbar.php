<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
   <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home ::
      w3layouts</title>
   <!--/tags -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script type="application/x-javascript">
   addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
   }, false);

   function hideURLbar() {
      window.scrollTo(0, 1);
   }
   </script>
   <!--//tags -->
   <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
   <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
   <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
   <link href="<?= base_url('assets/'); ?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
   <link href="<?= base_url('assets/'); ?>css/sweetalert2.min.css" rel='stylesheet' type='text/css' />
   <!-- //for bootstrap working -->
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
   <link
      href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
      rel='stylesheet' type='text/css'>
</head>

<body>
   <!-- header -->
   <div class="header" id="home">
      <div class="container">
         <ul>
            <?php if (!$this->session->userdata('username')) : ?>
               <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt"
                     aria-hidden="true"></i> Sign In </a></li>
               <li> <a href="<?= base_url('auth/registrasi'); ?>"><i class="fa fa-pencil-square-o"></i> Sign Up </a></li>
               <?php else : ?>
               <li> <i class="fa fa-user"></i> Selamat datang, <?= $this->session->userdata('name'); ?> </li>
               <li> <a href="<?= base_url('auth/profil'); ?>"><i class="fa fa-user"></i> Profil </a></li>
               <li> <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-pencil-square-o"></i> Logout! </a></li>
            <?php endif; ?>
         </ul>
      </div>
   </div>
   <!-- //header -->
   <!-- header-bot -->
   <div class="header-bot">
      <div class="header-bot_inner_wthreeinfo_header_mid">
         <div class="col-md-4 header-middle">
            <form action="<?= base_url('cari_produk/search'); ?>" method="post">
               <input type="search" name="search" placeholder="Search here..." required="">
               <input type="submit" value=" ">
               <div class="clearfix"></div>
            </form>
         </div>
         <!-- header-bot -->
         <div class="col-md-4 logo_agile">
            <h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag"
                     aria-hidden="true"></i></a></h1>
         </div>
         <!-- header-bot -->
         <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
               <li class="share">Share On : </li>
               <li><a href="#" class="facebook">
                     <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                     <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                  </a></li>
               <li><a href="#" class="twitter">
                     <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                     <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  </a></li>
               <li><a href="#" class="instagram">
                     <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                     <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                  </a></li>
               <li><a href="#" class="pinterest">
                     <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                     <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                  </a></li>
            </ul>



         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <!-- //header -->
   <!-- banner -->
   <div class="ban-top">
      <div class="container">
         <div class="top_nav_left">
            <nav class="navbar navbar-default">
               <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav menu__list">
                        <li class="active menu__item menu__item--current"><a class="menu__link"
                              href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                        <li class=" menu__item"><a class="menu__link" href="<?= base_url('produkpria'); ?>">Shop</a>
                        </li>
                        <li class="dropdown menu__item">
                           <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
                           <ul class="dropdown-menu multi-column columns-3">
                              <div class="agile_inner_drop_nav_info">
                                 <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                    <a href="mens.html"><img src="<?= base_url('assets/'); ?>images/top2.jpg"
                                          alt=" " /></a>
                                 </div>
                                 <div class="col-sm-3 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                       <li><a href="mens.html">Clothing</a></li>
                                       <li><a href="mens.html">Wallets</a></li>
                                       <li><a href="mens.html">Footwear</a></li>
                                       <li><a href="mens.html">Watches</a></li>
                                       <li><a href="mens.html">Accessories</a></li>
                                       <li><a href="mens.html">Bags</a></li>
                                       <li><a href="mens.html">Caps & Hats</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-sm-3 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                       <li><a href="mens.html">Jewellery</a></li>
                                       <li><a href="mens.html">Sunglasses</a></li>
                                       <li><a href="mens.html">Perfumes</a></li>
                                       <li><a href="mens.html">Beauty</a></li>
                                       <li><a href="mens.html">Shirts</a></li>
                                       <li><a href="mens.html">Sunglasses</a></li>
                                       <li><a href="mens.html">Swimwear</a></li>
                                    </ul>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </ul>
                        </li>
                        <li class="dropdown menu__item">
                           <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
                           <ul class="dropdown-menu multi-column columns-3">
                              <div class="agile_inner_drop_nav_info">
                                 <div class="col-sm-3 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                       <li><a href="womens.html">Clothing</a></li>
                                       <li><a href="womens.html">Wallets</a></li>
                                       <li><a href="womens.html">Footwear</a></li>
                                       <li><a href="womens.html">Watches</a></li>
                                       <li><a href="womens.html">Accessories</a></li>
                                       <li><a href="womens.html">Bags</a></li>
                                       <li><a href="womens.html">Caps & Hats</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-sm-3 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                       <li><a href="womens.html">Jewellery</a></li>
                                       <li><a href="womens.html">Sunglasses</a></li>
                                       <li><a href="womens.html">Perfumes</a></li>
                                       <li><a href="womens.html">Beauty</a></li>
                                       <li><a href="womens.html">Shirts</a></li>
                                       <li><a href="womens.html">Sunglasses</a></li>
                                       <li><a href="womens.html">Swimwear</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                    <a href="womens.html"><img src="<?= base_url('assets/'); ?>images/top1.jpg"
                                          alt=" " /></a>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </ul>
                        </li>
                        <li class="menu__item dropdown">
                           <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b
                                 class="caret"></b></a>
                           <ul class="dropdown-menu agile_short_dropdown">
                              <li><a href="icons.html">Web Icons</a></li>
                              <li><a href="typography.html">Typography</a></li>
                           </ul>
                        </li>
                        <li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
                        <li class=" menu__item">
                           <?php 
										$cart = $this->cart->contents();
										$jumlahqty = 0;
										foreach ($cart as $item) {
											$jumlahqty = $jumlahqty + $item['qty'];
									?>
                           <?php } ?>
                           <a class="menu__link" href="<?= base_url('home/data_belanja'); ?>">
                              <span
                                 style="color: red; margin-top: -20px; margin-top: 17px; background-color: #4569cd; color: #eddbdb; font-size: 12px; width: 18px; height: 17px; text-align: center; position: absolute; top: 10px; left: -5px; border-radius: 50%;"></span>
                              <span style="position: absolute; left: 1px; z-index: 9;"><?php echo $jumlahqty; ?></span>
                              <i class="fa fa-cart-arrow-down keranjang" aria-hidden="true">&nbsp; Keranjang Belanja</i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <!-- //banner-top -->
   <!-- Modal1 -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
               <div class="col-md-8 modal_body_left modal_body_left1">
                  <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                  <form action="<?= base_url('Home/loginSubmit'); ?>" method="post">
                     <div class="styled-input">
                        <input type="text" name="username" class="form-control">
                        <label>Username</label>
                        <span></span>
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                     </div>
                     <div class="styled-input agile-styled-input-top">
                        <input type="password" name="password" class="form-control">
                        <label>Password</label>
                        <span></span>
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                     </div>
                     <button type="submit" class="btn btn-primary">Log in</button>
                  </form>
                  <div class="clearfix"></div>
                  <p><a href="<?= base_url('auth/registrasi'); ?>"> Don't have an account?</a></p>

               </div>
               <div class="col-md-4 modal_body_right modal_body_right1">
                  <img src="<?= base_url('assets/'); ?>images/log_pic.jpg" alt=" " />
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <!-- //Modal content-->
      </div>
   </div>
   <!-- //Modal1 -->

   <?php if ($this->session->flashdata('flash')) : ?>
   <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
   <?php endif; ?>