<?php
session_start();
error_reporting(0);
require_once("orix_admin_panel/db.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Orix Gems and Jewellers</title>
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
            <!-- End header area -->
            <!-- Start Slider area -->
            <section class="slider-style-3 slider-area">
				<div class="slider-active owl-carousel">
				  <div class="single-slide" style="background-image:url('assets/img/slider/home3_1.jpg');"> 
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-md-6">
								<div class="slider-content">
									<h2 style="color: #ffffff">
										<strong>Connecting the finest Ceylon gems to the World<br></strong>
									</h2>
									<h4>
										Sri Lanka the Sapphire Capital.
									</h4>
									<div class="slider-button default-button">
										<a href="products.php">View All</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="single-slide" style="background-image:url('assets/img/slider/home3_2.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-md-6">
								<div class="slider-content">
									<h2 style="color: #ffffff">
										<strong>We brings you the highest quality natural gems</strong>
									</h2>
									<h3 style="color: #b9b8b8">
										Choose the gemstone which suits you!
									</h3>
									<div class="slider-button default-button">
										<a href="products.php">View All</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
					<div class="single-slide" style="background-image:url('assets/img/slider/home3_3.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-md-6">
								<div class="slider-content">
									<h2 style="color: #ffffff">
										<strong>Beautiful Handcrafted Jewellery for your Gemstones!</strong>
									</h2>
									<h3 style="color: #b9b8b8">
										Choose the gemstone which suits you!
									</h3>
									<div class="slider-button default-button">
										<a href="products.php">View All</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>            	
            </section>
            <!-- End Slider area -->

			<section class="shop-by-category-2 shop-by-category">
				<div class="container ">
					<div class="section-title section-title-style1">
						<h2>POPULAR GEMSTONES</h2>
					</div>

					<div class="wrap-border">
						<div class="row">
							<?php
							$sql = "SELECT * FROM subcategory WHERE popular_gem=1 LIMIT 8";
							$result = mysqli_query($conn, $sql);

							while ($popular_gem_row = mysqli_fetch_array($result)) {
								?>
								<div class="col-12 col-sm-6 col-md-6 col-lg-3">
									<div class="single-shop-by-category">
										<div class="focus-img shop-by-cat-images">
											<a href="products.php?gc=<?php echo $popular_gem_row["mainCategory"]; ?>&gt=<?php echo $popular_gem_row["id"]; ?>"><img src="<?php echo $popular_gem_row["image"]; ?>" alt="<?php echo $popular_gem_row['name']; ?>"></a>
										</div>
										<div class="shop-by-cat-content">
											<h3><?php echo $popular_gem_row['name']; ?></h3>
											<p><?php echo $popular_gem_row['small_description']; ?></p>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>

				</div>
			</section>

            <!-- Start three column banner  -->
            <div class="three-column-banner-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="buying-guide.php"><img src="assets/img/banner/banner-1.jpg" alt="Gem Buying Guide"></a>
            				</div>
            			</div>
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="http://www.ngja.gov.lk/en/gemstones-found-in-sri-lanka" target="_blank"><img src="assets/img/banner/banner-2.jpg" alt="Gems of Sri Lanka"></a>
            				</div>
            			</div>
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="products.php"><img src="assets/img/banner/banner-3.jpg" alt="Handcrafted Jewelry Designs"></a>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- End three column banner  -->

            <!-- Start hot deal area  -->
            <section class="hot-deal-3 hot-deal">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-md-12 col-lg-4 col-xl-3">
	            			<!-- start new products -->
	            			<div class="single-sidebar">
	            				<div class="home3-hot-deal hot-deal-product-wrapper">
									<div class="section-title section-title-color3">
				            			<h2>Gem of the Day</h2>
				            		</div> 	   	            				
	            					<div class="hot-deal-product-inner">
	            						<div class="home3-hot-deal-slider slider-contral2 owl-carousel">
											<?php
											$sql = "SELECT * FROM product WHERE gem_of_the_day=1";
											$result = mysqli_query($conn, $sql);

											$gem_of_day = mysqli_fetch_array($result);
											?>
	            							<div class="hot-deal-single-item">
	            								<div class="hot-deal-image">
	            									<a href="product_details.php?gc=<?php echo $gem_of_day["gem_category"]; ?>&gt=<?php echo $gem_of_day["gem_type"]; ?>&gem=<?php echo $gem_of_day["id"]; ?>"><img src="<?php echo $gem_of_day['image1']; ?>" alt="<?php echo $gem_of_day['name']; ?>"></a>
	            									<div class="product-action">
	            										<a href="product_details.php?gc=<?php echo $gem_of_day["gem_category"]; ?>&gt=<?php echo $gem_of_day["gem_type"]; ?>&gem=<?php echo $gem_of_day["id"]; ?>"><i class="material-icons">visibility</i></a>
	            									</div>
	            								</div>
	            								<div class="hot-deal-content">
	            									<h3><?php echo $gem_of_day['name']; ?></h3>
													<p><?php echo $gem_of_day['small_description']; ?></p>
													<?php echo $gem_of_day['weight']; ?>

													<div class="hot-price">
	            										<span class="regular-price"><?php echo $gem_of_day['price']; ?></span>
														<span class="sale-price"><?php echo $gem_of_day['offer_price']; ?></span>
													</div>
													<div class="default-button">
														<a href="product_details.php?gc=<?php echo $gem_of_day["gem_category"]; ?>&gt=<?php echo $gem_of_day["gem_type"]; ?>&gem=<?php echo $gem_of_day["id"]; ?>">ADD TO CART</a>
													</div>
	            								</div>
	            							</div>
	            						</div>
	            					</div>
	            				</div>         						
	            			</div>	
	            			<!-- end new products -->
            			</div>        
            			
            			<div class="col-12 col-md-12 col-lg-8 col-xl-9">
							<div class="section-title section-title-style1 section-title-border section-title-color3">
		            			<h2>RECENT PRODUCT</h2>
		            		</div>
        					<div class="home3-recent-product sidebar-product-inner">
								<?php
								$sql = "SELECT * FROM product WHERE recent_product=1";
								$result = mysqli_query($conn, $sql);

								while ($recent_gem_row = mysqli_fetch_array($result)) {
								?>
        						<div class="single-sidebar-product">
    								<div class="focus-img single-sidebar-image">
    									<a href="product_details.php?gc=<?php echo $recent_gem_row["gem_category"]; ?>&gt=<?php echo $recent_gem_row["gem_type"]; ?>&gem=<?php echo $recent_gem_row["id"]; ?>"><img src="<?php echo $recent_gem_row['image1']; ?>" alt="product"></a>
										<div class="product-action">
											<a href="product_details.php?gc=<?php echo $recent_gem_row["gem_category"]; ?>&gt=<?php echo $recent_gem_row["gem_type"]; ?>&gem=<?php echo $recent_gem_row["id"]; ?>"><i class="material-icons">visibility</i></a>
										</div>
									</div>
    								<div class="sidebar-main-content">
    									<a href="product_details.php?gc=<?php echo $recent_gem_row["gem_category"]; ?>&gt=<?php echo $recent_gem_row["gem_type"]; ?>&gem=<?php echo $recent_gem_row["id"]; ?>"><?php echo $recent_gem_row['name']; ?></a>
										<p><?php echo $recent_gem_row['small_description']; ?></p>
										<?php echo $recent_gem_row['weight']; ?>
										<div class="price-box">
											<span class="regular-price"><?php echo $recent_gem_row['price']; ?></span>
										</div>
										<div class="default-button">
											<a href="product_details.php?gc=<?php echo $recent_gem_row["gem_category"]; ?>&gt=<?php echo $recent_gem_row["gem_type"]; ?>&gem=<?php echo $recent_gem_row["id"]; ?>">ADD TO CART</a>
										</div>
        							</div>
        						</div>
									<?php
								}
								?>
        					</div>
            			</div>
            		</div>
            	</div>
            </section>
            <!-- End hot deal area  -->

			<!-- Start jewelry with image  -->
			<div class="product-carousel-with-image">
				<div class="container">
					<div class="row flex-row-reverse">
						<div class="col-12 col-sm-12 col-md-4 col-lg-5">
							<div class="banner-add single-one-column-banner">
								<a href="products.php"><img src="assets/img/banner/one-column-height.jpg" alt="one-column1"></a>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-8 col-lg-7">
							<div class="section-title section-title-style1 section-title-border">
								<h2>Exclusive Jewellery</h2>
							</div>
							<div class="cat-slider1 product-grid-wrapper">
								<?php
								$sql = "SELECT * FROM subcategory WHERE exclusive_jewellery=1";
								$result = mysqli_query($conn, $sql);

								while ($exclusive_jewellery_row = mysqli_fetch_array($result)) {
									?>
									<div class="single-grid-product">
										<div class="grid-product-image">
											<a href="products.php?gc=<?php echo $exclusive_jewellery_row["mainCategory"]; ?>&gt=<?php echo $exclusive_jewellery_row["id"]; ?>"><img src="<?php echo $exclusive_jewellery_row["image"]; ?>" alt="<?php echo $exclusive_jewellery_row['name']; ?>"></a>
										</div>
										<div class="grid-product-info">
											<a href="products.php?gc=<?php echo $exclusive_jewellery_row["mainCategory"]; ?>&gt=<?php echo $exclusive_jewellery_row["id"]; ?>"><?php echo $exclusive_jewellery_row['name']; ?></a>
										</div>
									</div>
									<?php
								}
								?>
							</div>
							<div class="category-btn default-button">
								<a href="#">All Jewellers</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End jewelry with image  -->

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