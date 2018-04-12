<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Longdomdu'sor Shoppy</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<?php session_start(); if($_SESSION['name']==null) : ?>
			<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> SIGN IN </a></li>
			<?php else : ?>
			<li> <a href="#" data-toggle="modal" data-target="#modal55"> <?php  echo $_SESSION['name'] ?> </a></li>
			<?php endif; ?>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : +66 826511203</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:Fivepinky@gmail.com">Fivepinky@example.com</a></li> 

		</ul>
	</div>
</div>

<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-6 logo_agile">
				<a href="index.html"><img src="images/Logo1.jpg" alt=" " ></a>
			</div>
        <!-- header-bot -->
		<div class="col-md-2 agileits_schedule_bottom_right top_content">
		<ul class="social-nav model-3d-0 footer-social w3_agile_social">
			<per class="share">Share On :</per> <a href="#" class="facebook">
				<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
				<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
				<a href="#" class="twitter">
				<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
				<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
				<a href="#" class="instagram">
				<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
				<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
				<a href="#" class="pinterest">
				<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
				<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
		</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's Perfume<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/menperfume.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="chanelmens.html">Chanel</a></li>
											<li><a href="Diormen.html">Dior</a></li>
											<li><a href="jomalonemans.html">Jo malone</a></li>
											<li><a href="isseymiyakemens.html">Issey miyake</a></li>
											<li><a href="calvinkleinmens.html">Calvin Klein</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="burberrymens.html">Burberry</a></li
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's Perfume<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="chanelwomens.html">Chanel</a></li>
											<li><a href="diorwomens.html">Dior</a></li>
											<li><a href="jomalonewomens.html">Jo malone</a></li>
											<li><a href="isseywomens.html">Issey miyake</a></li>
											<li><a href="calvinwomens.html">Calvin Klein</a></li>
											</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="burberrywomens.html">Burberry</a></li>
											</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/Womenperfumes.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					</ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>
			</div>
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
						<h3 class="agileinfo_sign">SIGN UP  <span>NOW</span></h3>
							<form action="Myclasstest.php" method="POST">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="uid" required="">
								<label>Username</label>
								<span></span>
								
							</div>
							<div class="styled-input">
								<input type="password" name="pwd" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="Sign.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="firstname" required=" ">
								<label>Firstname</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="lastname" required=" ">
								<label>Lastname</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="uid" required=" ">
								<label>Username</label>
								<span></span>
							</div>
									
							<div class="styled-input">
								<input type="password" name="pwd" required=" ">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=" ">
								<label>Email</label>
								<span></span>
							</div>
							<input type="submit" value="Register">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!-- Modal55 -->
		<div class="modal fade" id="modal55" tabindex="-1" role="dialog">
			<div class="dropdown">	
				<button class="dropbtn">
					<input type="submit" name="submit" value="Logout" class="button" />
				 </button>											
			</div>
		</div>
<!-- //Modal2 -->
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
			<li data-target="#myCarousel" data-slide-to="5" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="Diormen.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="chanelwomens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="calvinkleinmens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="jomalonewomens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5">
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="burberrywomens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item6">
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="isseymiyakemens.html">Shop Now </a>
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
		<!-- //banner -->
		<div class="banner_bottom_agile_info">
			<div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
				<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/MMM1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/MMM2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arriv
							</div>
									als</p>
							</figcaption>
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div>
		 </div>
    </div>
	<!-- schedule-bottom -->

<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits what's Trending -->
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="mans.html"><img src="images/MM1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>

			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.html"><img src="images/MM2.jpg" alt=" " ><h4>Flat <span>50%</span> offer</h4></a>
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
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/P9_50ml_MR. BURBERRY397X467.jpg" alt="" class="pro-image-front">
										<img src="images/P9_50ml_MR. BURBERRY397X467.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Bm1.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product">
										<h4><a href="Bm1.html">BLEU DE CHANEL EAU DE TOILETTE</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿2340.00</span>
											<del>฿2500.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="BLEU DE CHANEL EAU DE TOILETTE" />
																	<input type="hidden" name="amount" value="2340.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/P13_100ml_For Men Eau de Toilette397X467.jpg" alt="" class="pro-image-front">
										<img src="images/P13_100ml_For Men Eau de Toilette397X467.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Bm5.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Bm5.html">Burberry For Men Eau De Toilette</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿2700.00</span>
											<del>฿3200.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Burberry For Men Eau De Toilett" />
																	<input type="hidden" name="amount" value="2700.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
                            <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Ca5_ANTAEUS397.jpg" alt="" class="pro-image-front">
										<img src="images/Ca5_ANTAEUS397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Cm5.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Cm5.html">ALLURE HOMME EAU DE TOILETTE SPRAY</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿2340.00</span>
											<del>฿2500.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="ALLURE HOMME EAU DE TOILETTE SPRAY" />
																	<input type="hidden" name="amount" value="2340.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/j4.jpg" alt="" class="pro-image-front">
										<img src="images/j4.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="joM1.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="joM1.html">ORRIS & SANDALWOOD COLOGNE</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿6950.00</span>
											<del>฿7000.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="ORRIS & SANDALWOOD COLOGNE" />
																	<input type="hidden" name="amount" value="6950.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/I13.jpg" alt="" class="pro-image-front">
										<img src="images/I13.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="IsM6.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="IsM6.html">L'EAU D'ISSEYPOUR HOMME - NOIR AMBRÉ</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1700.00</span>
											<del>฿2100.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="L'EAU D'ISSEYPOUR HOMME - NOIR AMBRÉ" />
																	<input type="hidden" name="amount" value="฿1700.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
								<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Dm6.jpg" alt="" class="pro-image-front">
										<img src="images/Dm6.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="DM6.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="DM6.html">L'EAU D'ISSEYPOUR HOMME - NOIR AMBRÉ</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿3490.00</span>
											<del>฿3600.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="L'EAU D'ISSEYPOUR HOMME - NOIR AMBRÉ" />
																	<input type="hidden" name="amount" value="3490.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
								<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Ca3_PLATINUM397.jpg" alt="" class="pro-image-front">
										<img src="images/Ca3_PLATINUM397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Cm3.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Cm3.html">PLATINUM ÉGOÏSTE EAU DE TOILETTE SPRAY</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿2340.00</span>
											<del>฿2500.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="PLATINUM ÉGOÏSTE EAU DE TOILETTE SPRAY" />
																	<input type="hidden" name="amount" value="2340.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
								<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/C20_Eternity Cologne397.jpg" alt="" class="pro-image-front">
										<img src="images/C20_Eternity Cologne397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="CKm4.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="CKm4.html">Eternity Cologne 6.7 Oz Eau De Toilette Spray</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1450.00</span>
											<del>฿1670.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Eternity Cologne 6.7 Oz Eau De Toilette Spray" />
																	<input type="hidden" name="amount" value="2050.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/I1.jpg" alt="" class="pro-image-front">
										<img src="images/I1.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Is1.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Is1.html">L'EAU D'ISSEY - EAU DE TOILETTE</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1700.00</span>
											<del>฿2100.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="L'EAU D'ISSEY - EAU DE TOILETTE" />
																	<input type="hidden" name="amount" value="1700.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Jw2.jpg" alt="" class="pro-image-front">
										<img src="images/Jw2.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="joW2.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="joW2.html">WOOD SAGE & SEA SALT COLOGNE</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿5200.00</span>
											<del>฿5700.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="WOOD SAGE & SEA SALT COLOGNE" />
																	<input type="hidden" name="amount" value="5200.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Ca15_GABRIELLE CHANE397.jpg" alt="" class="pro-image-front">
										<img src="images/Ca15_GABRIELLE CHANE397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Cw3.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Cw3.html">CHANEL GABRIELLE CHANEL EAU DE PARFUM SPRAY</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿3525.00</span>
											<del>฿3700.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="CHANEL GABRIELLE CHANEL EAU DE PARFUM SPRAY " />
																	<input type="hidden" name="amount" value="3525.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/C3_Ck One Perfume397.jpg" alt="" class="pro-image-front">
										<img src="images/C3_Ck One Perfume397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Ckw3.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Ckw3.html">Ck One Perfume 6.7 Oz Eau De Toilette Spray (Unisex)</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1150.00</span>
											<del>฿1370.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Ck One Perfume 6.7 Oz Eau De Toilette Spray (Unisex)" />
																	<input type="hidden" name="amount" value="1150.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/P5_75ml_The Beat Eau de397X467.jpg" alt="" class="pro-image-front">
										<img src="images/P5_75ml_The Beat Eau de397X467.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Bw5.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Bw5.html">The Beat Eau de Parfum </a></h4>
										<div class="info-product-price">
											<span class="item_price">฿3160.00</span>
											<del>฿3400.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="The Beat Eau de Parfum " />
																	<input type="hidden" name="amount" value="3160.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/I6.jpg" alt="" class="pro-image-front">
										<img src="images/I6.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Is6.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Is6.html">PLEATS PLEASE - EAU DE TOILETTE </a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1700.00</span>
											<del>฿2100.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="PLEATS PLEASE - EAU DE TOILETTE " />
																	<input type="hidden" name="amount" value="1700.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/C16_Ck One Gold397.jpg" alt="" class="pro-image-front">
										<img src="images/C16_Ck One Gold397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Ckw8.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Ckw8.html">Ck One Gold Perfume 6.7 oz Eau De Toilette Spray </a></h4>
										<div class="info-product-price">
											<span class="item_price">฿1600.00</span>
											<del>฿2100.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Ck One Gold Perfume 6.7 oz Eau De Toilette Spray " />
																	<input type="hidden" name="amount" value="1600.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/Ca22_COCO397.jpg" alt="" class="pro-image-front">
										<img src="images/Ca22_COCO397.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Cw8.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="Cw8.html">CHANEL COCO EAU DE PARFUM SPRAY 1.7 oz</a></h4>
										<div class="info-product-price">
											<span class="item_price">฿3357.00</span>
											<del>฿3500.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="CHANEL COCO EAU DE PARFUM SPRAY 1.7 oz" />
																	<input type="hidden" name="amount" value="3357.00" />
																	<input type="hidden" name="discount_amount" value="0" />
																	<input type="hidden" name="currency_code" value="THB" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>

									</div>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- //new_arrivals -->

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
						<p>when you buy total 490 Bath, My shop will free shipping.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>My shop will support, when you coming shopping on my Longdomdu'sor Shoppy all time and all day.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>PRODUCT BACK GUARANTEE</h3>
						<p>You can confident in my Longdomdu'sor Shoppy, when you find problem you can product back.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>HAVE POINT ON CARD</h3>
					<p>when you buy a lot of perfume, you will recieve point on your card.</p>
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>L</span>ongdomdu'sor Shoppy </a></h2>
			<p>Longdomdu'sor Shoppy is a collect
				 many brand of perfumes and you can
				 buy inexpensive cost more THBn another shop.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Perfumes</a></li>
						<li><a href="womens.html">Women's Perfumes</a></li>
						<li><a href="about.html">About</a></li>
					</ul>
				</div>

				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+66 826511203</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href=":Fivepinky@gmail.com">:Fivepinky@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>THBmmasat University</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Member</h4>
					<ul>
						<li><a href="single.html"><img src="images/thorch.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/new.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/moss.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/ongfong.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/poppy.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/nun.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>

											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
