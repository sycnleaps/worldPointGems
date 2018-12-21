<?php
session_start();
error_reporting(0);
require_once("orix_admin_panel/db.php");

$gem_category = $_GET["gc"];

if(isset($gem_category)) {
	$sql = "SELECT * FROM maincategory WHERE id=$gem_category";
	$result = mysqli_query($conn, $sql);
	$gem_category_row = mysqli_fetch_array($result);
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
		<meta name="keywords" content="gems, srilanka, worldpointgems, ceylongems, srilankagems, worldgems, gem, bluesapphire, stones, Word point holdings, World point,Worlpoint gems,gem,gem srilanka,best gems sri lanka,natural gem stone,natural gem srilanka,Gemstone,Best gemstone,Heated gem,treated gem,Best gemstone srilanka ,Best gemstone Italy,Natural gemstone,natural gemstone,Precious stone,Precious stone srilanka, brazil, Thailand, india, mosambique, afica, madagscar, Burma, kashmir, Semi precious stone,Minerals,rock and mineral,Mining,Gem mining,Gem bit,Gem auction,Gem mines,Gem mine Sri Lanka,Gem,Sapphire,Srilankan sapphire,Srilankan blue sapphire,Padmaracha ,gewuda,diamond,diamond business,dimond sri lanka,dimond Italy,Ceylon blue sapphire,Ceylon,gem cutting,gem cutting sri lanka,Gem cutting Italy,juwellery making srilanka, jwellery making Italy,Best gems,Quality gems,Certified gems,valuble gems,gem with certificate srilanka,gem certificate,Natural cheapest gem,Srilanka,Srilankan gems,Best Srilankan gems,Natural Srilanka gems,Certified Srilankan gem,Quality gem srilanka,Natural cheapest gem srilanka,Gem business,Gem business srilanka,Gem dealer,Best gem dealer,Gem dealer Srilanka,Gem fair,Gem fair srilanka,Gem and jewelry, jewelry design,watch,necklace,pendant,ring,bracelet,Earing">
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
									<li><?php echo $gem_category_row['name']; ?></li>
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
            		<div class="row flex-row-reverse">
            			<div class="col-12 col-md-12 col-lg-12">
							<div class="main-content">
								<div class="shop-page-header" style="background-image:url('assets/img/banner/bg_shop.jpg'); background-repeat: no-repeat">
									<div class="col-12 col-lg-10">
										<div class="product-about-content">
											<h4><?php echo $gem_category_row['name']; ?></h4>
											<p><?php echo $gem_category_row['description']; ?></p>
										</div>
									</div>
								</div>
								<div class="shop-page-product-area">
									<div class="shop-page-product-shorting section-title-border">
										<div class="product-shorting-bar">
											<div class="show-page">
												<span>Show</span>
												<div class="per-page short-select-option">
													<select class="orderby">
														<option value="">12</option>
														<option value="">15</option>
														<option value="">18</option>
													</select>
												</div>									
											</div>
		                                    <div class="short-asc-dsc">
		                                    	<a href="" title="Set Descending Direction"><i class="fa fa-long-arrow-up"></i></a>
		                                    </div>												
											<div class="shoort-by">
												<span>Sort by</span>
												<div class="short-select-option">
													<select>
														<option value="">Name</option>
														<option value="">Price</option>
													</select>												
												</div>
											</div>
										</div>
									</div>

									<div class="row product-grid-view">
									<?php
									$gem_category = $_GET["gc"];

									if(isset($gem_category)) {
										$sql = "SELECT * FROM product WHERE gem_category=$gem_category";
										$result = mysqli_query($conn, $sql);

										while ($gem_row = mysqli_fetch_array($result)) {
											?>
												<div class="col-12 col-sm-6 col-md-6 col-lg-3 single-grid-product">
													<div class="grid-product-image">
														<!--												<span class="sale">35%</span>-->
														<a href="product_details.php?gc=<?php echo $gem_row["gem_category"]; ?>&gt=<?php echo $gem_row["gem_type"]; ?>&gem=<?php echo $gem_row["id"]; ?>"><img
																src="<?php echo $gem_row['image1']; ?>"
																alt="<?php echo $gem_row['name']; ?>"></a>
														<div class="product-action">
															<a href="#"><i
																	class="material-icons">favorite_border</i></a>
															<a href="product_details.php?gc=<?php echo $gem_row["gem_category"]; ?>&gt=<?php echo $gem_row["gem_type"]; ?>&gem=<?php echo $gem_row["id"]; ?>"><i class="material-icons">visibility</i></a>
														</div>
														<a class="grid-btn" href="product_details.php?gc=<?php echo $gem_row["gem_category"]; ?>&gt=<?php echo $gem_row["gem_type"]; ?>&gem=<?php echo $gem_row["id"]; ?>">More Details</a>
													</div>
													<div class="grid-product-info">
														<div class="price-box">
															<span
																class="regular-price"><?php echo $gem_row['price']; ?></span>
															<span
																class="sale-price"><?php echo $gem_row['offer_price']; ?></span>
														</div>
														<?php echo $gem_row['name']; ?></a>
														<p><?php echo $gem_row['weight']; ?></p>
													</div>
												</div>
											<?php
										}
									}
									?>
									</div>

									<div class="pagination-area">
										<ul>
											<li><a href="#"><i class="material-icons">chevron_left</i></a></li>
											<li><span>1</span></li>
											<li><a href="#">2</a></li>
											<li><a href="#"><i class="material-icons">chevron_right</i></a></li>
										</ul>
									</div>
								</div>
							</div>
            			</div>
            		</div>
            	</div>
            </section>			
			<!-- End Maincontent  -->

			<!-- Start footer area  -->
			<?php include 'footer.php';?>
			<!-- End footer area  -->

        </div> <!-- End wrapper -->
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,fr,hi,it,ja,ko,nl,ru,th,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
		</script>

		<!-- all js here -->
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