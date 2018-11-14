<?php
session_start();
error_reporting(0);
require_once("wp_admin_panel/db.php");

$gem_id = $_GET["pid"];

if(isset($gem_id)) {
	$sql = "SELECT * FROM product WHERE id=$gem_id";
	$result = mysqli_query($conn, $sql);
	$gem_row = mysqli_fetch_array($result);
}

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>World Point Gems</title>
	<meta name="description" content="World Point Gems is a Global Supplier of responsibly sourced loose gemstones, and colored gem studded jewelry. We strive to provide a unique quality experience online that though exists in other ecommerce segments, is often found to be elusive in the gems and jewelry segment. World Point Gems specializes in the Mining & Marketing of Natural Colored Gems Stones, both Precious stones and Semi-precious stones. We are a young, dynamic company and support raw emerging talent wherever possible, working with cutting-edge designers as well as some of the most iconic brands.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="gems, srilanka, worldpointgems, ceylongems, srilankagems, worldgems, gem, bluesapphire, stones">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- all css here -->
	<link rel="stylesheet" href="assets/css/material-icons.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fotorama.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="assets/css/bundle.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="wrapper">
	<!-- Start header area -->
	<?php include 'header.php';?>

	<!-- Start Breadcrumb  -->
	<div class="breadcrump-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="korando-breadcrump">
						<ul>
							<li><a href="index.php" title="Go to Home Page">Home</a></li>
							<li>Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Breadcrumb  -->

	<!-- Start Maincontent  -->
	<section class="main-content-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="section-title section-title-style1">
						<h2>Shopping Cart</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12">
					<!-- cart table start -->
					<div class="korando-table-area">
						<div class="cart-table table-responsive">
							<table class="table">
								<thead>
								<tr>
<!--									<th class="width-1">Remove</th>-->
									<th class="width-3">Product Name</th>
									<th class="width-6">Unit Price 	</th>
									<th class="width-7">Qty</th>
									<th class="width-8">Subtotal</th>
								</tr>
								</thead>
								<tbody>
								<tr class="carttr_1">
<!--									<td>-->
<!--										<div class="cartpage-item-remove">-->
<!--											<a href="#" title="Remove"><i class="material-icons">clear</i></a>-->
<!--										</div>-->
<!--									</td>-->
									<td>
										<div class="cartpage-pro-dec">
											<p><a href="product-details.html"><?php echo $gem_row["name"]; ?></a></p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>Rs. <?php echo $gem_row["price"]; ?></p>
										</div>
									</td>
									<td>
										<div class="cart-plus-minus">
											<input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>Rs. <?php echo $gem_row["price"]; ?></p>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
<!--						<div class="cartpage-button">-->
<!--							<div class="primary-btn default-button">-->
<!--								<a href="products.php">Continue Shopping</a>-->
<!--							</div>-->
<!--							<div class="primary-btn default-button">-->
<!--								<a href="#">Clear Cart</a>-->
<!--							</div>-->
<!--						</div>-->
					</div>
					<!-- cart table end -->
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-4">
				</div>
				<div class="col-12 col-sm-12 col-md-4">
				</div>
				<div class="col-12 col-sm-12 col-md-4">
					<!-- total-amount start -->
					<div class="cart-page-single-area cartpage-total-amount">
						<div class="cartpage-total-price">
<!--							<div class="total-price-box">-->
<!--								<p><span class="sub-t">Subtotal <span class="sub-t-p">$999.99</span></span></p>-->
<!--								<p><span class="grand-t">Grand Total <span class="grand-t-p">$999.99</span></span></p>-->
<!--							</div>-->

							<div class="primary-btn default-button">
								<a href="checkout.html">Proceed</a>
							</div>
						</div>
					</div>
					<!-- total-amount end -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Maincontent  -->

	<!-- Start footer area  -->
	<?php include 'footer.php';?>
	<!-- End footer area  -->
</div> <!-- End wrapper -->

<!-- all js here -->
<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,fr,hi,it,ja,ko,nl,ru,th,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
</script>
<!-- jquery js -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/fotorama.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery-nice-select-1.0.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
