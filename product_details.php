<?php
session_start();
error_reporting(0);
require_once("orix_admin_panel/db.php");

$gem_category = $_GET["gc"];
$gem_type = $_GET["gt"];
$gem = $_GET["gem"];

if(isset($gem_category)) {
	$sql = "SELECT * FROM product WHERE gem_category=$gem_category AND id=$gem";
	$result = mysqli_query($conn, $sql);
	$gem_row = mysqli_fetch_array($result);
}

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
			<!-- Start Breadcrumb  -->
            <div class="breadcrump-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="korando-breadcrump">
								<ul>
									<li><a href="index.php" title="Go to Home Page">Home</a></li>
									<li><?php echo $gem_row["name"]; ?></li>
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
						<div class="col-12 col-md-6">
							<div class="single-product-image">
								<div class="fotorama">
								<!--	<video width="500" height="330" controls>
										<source src="<?php echo $gem_row["video"]; ?>" type="video/mp4">
										<img src="<?php echo $gem_row["video"]; ?>" alt="product image">
									</video> -->
									<a href="<?php echo $gem_row["image1"]; ?>">
										<img src="<?php echo $gem_row["image1"]; ?>" alt="<?php echo $gem_row["name"]; ?>">
									</a>
									<a href="<?php echo $gem_row["image2"]; ?>">
										<img src="<?php echo $gem_row["image2"]; ?>" alt="<?php echo $gem_row["name"]; ?>">
									</a>
									<a href="<?php echo $gem_row["image3"]; ?>">
										<img src="<?php echo $gem_row["image3"]; ?>" alt="<?php echo $gem_row["name"]; ?>">
									</a>
									<a href="<?php echo $gem_row["image4"]; ?>">
										<img src="<?php echo $gem_row["image4"]; ?>" alt="<?php echo $gem_row["name"]; ?>">
									</a>
									<a href="<?php echo $gem_row["image5"]; ?>">
										<img src="<?php echo $gem_row["image5"]; ?>" alt="<?php echo $gem_row["name"]; ?>">
									</a>
								</div>
							</div>							
						</div>
						<div class="col-12 col-md-6">
							<div class="single-product-description">
								<br class="product-description-content product-review">
								
								
								
									<h2 style="font-family: Retro"><?php echo $gem_row["name"]; ?></h2>
									<p style="font-family: Retro"><?php echo $gem_row["small_description"]; ?></p>
									
								<!--	<div class="price-box">
										<span class="regular-price"><?php echo $gem_row["price"]; ?></span>
									</div> -->

									<div class="product-meta product-review">
										<p class="product-sku">Prodcut Code : <span> <?php echo $gem_row["item_code"]; ?></span></p>
										<p class="availability">Availability : <span> <?php echo $gem_row["availability"]; ?></span></p>
										
									</div>

									<div class="product-meta">
										<h6><strong>Product Details</strong></h6>
										<div class="col-6 col-md-6">
											<p>Color : <?php echo $gem_row["color"]; ?></p>
											<p>Pieces: <?php echo $gem_row["pieces"]; ?></p>
										</div>
									<!--	<div class="col-6 col-md-6">
											<p>Treatment : <?php echo $gem_row["treatment"]; ?></p>
											<p>Weight : <?php echo $gem_row["weight"]; ?></p>
											<p>Certification : <?php echo $gem_row["certification"]; ?></p>
											<p></p>
										</div> -->
									</div>
								</br></br></br>
								</div>
							<!--	<div class="product-variation" style="padding-top: 10px">
									<div class="product-quantity">
										<div class="default-button">
											<a href="cart.php?pid=<?php echo $gem_row["id"]; ?>">ADD TO CART</a>
										</div>
									</div>
								</div>		 -->								
							</div>	
						</div>
						<div class="main-content">
							<p><?php echo $gem_row["long_description"]; ?></p>
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