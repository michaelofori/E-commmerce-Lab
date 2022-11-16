<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require("../controllers/cart_controller.php");
//require ("../controllers/cart_controller.php");

require('../settings/core.php');

if (!is_user_logged_in()) {
	header("location:../login/login.php");
}
$cid = $_SESSION['customer_id'];
$count = count_cart_ctr($cid);



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ALOC | CART</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/shop.css" type="text/css" media="screen" property="" />
	<link href="../css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="../css/checkout.css">
	<link href="../css/stylei.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.html"><span>ALOC</span> <i></i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="Welcome_page.php">Home</a></li>
							<li><a href="404.php">About</a></li>
							<li><a href="#" class="active">Cart</a></li>
							<li><a href="shop_main.php">Shop Now</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="../actions/Logout.php">Log Out/In</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<button style="width: 120px; padding-right: 100px;" class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"><?php echo $count[0]["SUM(qty)"]; ?></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="search_results.php" method="GET">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="Shop_main.php">Shop</a><i>|</i></li>
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span><?php echo $count[0]["SUM(qty)"]; ?> Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>

								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php


							$cart = get_from_cart_ctr($cid);

							foreach ($cart as $product) {
								# code...
							?>
								<tr class="rem1">

									<td class="invert-image"><a onclick="loadoc3(<?php echo $product['product_id']; ?>)"><img style="width:50px; height: 50px;" src="<?php echo $product['product_image']; ?>" alt=" " class="img-responsive"></a></td>
									<td class="invert">
										<div class="quantity">
											<div class="quantity-select">
												<form>

													<button id="de" onclick="loadDoc2(<?php echo $product['product_id']; ?>)" style="background-color: #d80e03" class="entry value-minus">&nbsp;</button>

													<button class="entry value"><span><?php echo $product['qty']; ?></span></button>
													<button id="in" onclick="loadDoc(<?php echo $product['product_id']; ?>)" style="background-color: #00ff00;color:white" class="entry value-plus active">&nbsp;</button>
											</div>
										</div>
									</td>
									<td class="invert"><?php echo $product['product_title']; ?></td>

									<td class="invert">GH¢<?php echo $product['products.product_price*cart.qty']; ?></td>
									<td class="invert">
										<div class="rem">
											<Input onclick="delDoc(<?php echo $product['product_id']; ?>)" type="submit" value="" class="close1">
										</div>

									</td>
								</tr>

						</tbody>
					<?php } ?>
					</table>


					<script>
						function delDoc(id) {



							dataString = 'info=' + id;
							// alert(id);
							// 
							$.ajax({
								type: "POST",
								url: "../actions/del_cart.php",
								data: dataString,
								cache: false,
								success: function(info) {


									alert(info);
									location.reload(true);


								}


							});
						}
					</script>
					<script>
						function loadDoc(id) {
							inputbx = document.getElementById("in").value;
							console.log(id);
							dataString = 'pid=' + id + '&inputbx=' + inputbx;


							$.ajax({
								type: "POST",
								url: "../actions/update_qty.php",
								data: dataString,
								cache: false,
								success: function(result) {
									//alert(result);
								}


							});
						}
					</script>



					<script>
						function loadDoc2(id2) {

							inputbx2 = document.getElementById("de").value;
							dataString = 'pid2=' + id2 + '&inputbx2=' + inputbx2;
							console.log(id2);

							$.ajax({
								type: "POST",
								url: "../actions/update_qty.php",
								data: dataString,
								cache: false,
								success: function(result) {
									//alert(result);
								}


							});
						}
					</script>


					<script>
						function loadDoc3(id) {
							//inputbx = document.getElementById("input_brand").value;


							dataString = 'inputbx=' + id;

							$.ajax({
								type: "GET",
								url: "../actions/single_view.php",
								data: dataString,
								cache: false,
								success: function(result) {
									//alert(result);
									window.log("../actions/single_view.php");
								}


							});
						}
					</script>


				</div>

				<style>
					.pay {
						background-color: black;
						border: 2px solid white;
						color: white;
						width: 50%;
						height: 50px;
						transition-duration: 0.4s;
						overflow: hidden;
						cursor: pointer;
					}

					.pay:hover {
						background-color: #e74b45;
						color: white;
						border: 2px solid #e74b45;

					}

					.pay2 {
						color: white;
						transition-duration: 0.4s;
						overflow: hidden;
						cursor: pointer;
					}

					.pay2:hover {
						background-color: #e74b45;
						color: white;


					}
				</style>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>CHECKOUT</h4>
						<ul>
							<?php
							$tt = get_from_cart_ctr($cid);
							$total = total_cart_price_ctr($cid);
							foreach ($tt as $get) {

							?>
								<li><?php echo $get['product_title']; ?> <i>-</i> <span>GH¢<?php echo $get['products.product_price*cart.qty']; ?></span></li>

							<?php } ?>
							<li>Total<i>-</i> <span>GH¢ <?php echo $total["SUM(cart.qty*products.product_price)"] ?></span></li>

							<button class="pay"><a href="Payment.php" class="pay2" type="submit">CONTINUE TO PAYMENT</a></button>

						</ul>
					</div>


					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>


		<!-- footer -->
		<div class="footer_agileinfo_w3">
			<div class="footer_inner_info_w3ls_agileits">
				<div class="col-md-3 footer-left">
					<h2><a href="index.html"><span>AL</span>OC </a></h2>
					<p>PROVIDING YOU WITH THE BEST ART WORKS AVALIABLE</p>
					<uul class="social-nav model-3d-0 footer-social social two">
						<li>
							<a href="www.facebook.com" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="www.twitter.com" class="twitter">
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="www.instagram.com" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							</a>
						</li>
						<li>
							<a href="www.pinterest.com" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							</a>
						</li>
						</ul>
				</div>
				<div class="col-md-9 footer-right">
					<div class="sign-grds">
						<div class="col-md-4 sign-gd">
							<h4>Our <span>Information</span> </h4>
							<ul>
								<li><a href="Welcome_page.php">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="404.html">Services</a></li>
								<li><a href="404.html">Short Codes</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>

						<div class="col-md-5 sign-gd-two">
							<h4>Store <span>Information</span></h4>
							<div class="address">
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Phone Number</h6>
										<p>+233 552 782 355</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Email Address</h6>
										<p>Email :<a href="mailto:ALOC@gmail.com"> </a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Location</h6>
										<p>1 University Ave, Berekuso

										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

				<p class="copy-right-w3ls-agileits">&copy 2018 Downy Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="../js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function(evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="../js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function(c) {
			$('.close1').on('click', function(c) {
				$('.rem1').fadeOut('slow', function(c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.close2').on('click', function(c) {
				$('.rem2').fadeOut('slow', function(c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.close3').on('click', function(c) {
				$('.rem3').fadeOut('slow', function(c) {
					$('.rem3').remove();
				});
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>

</html>