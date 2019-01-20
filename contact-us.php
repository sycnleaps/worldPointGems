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

			<!-- Start Breadcrumb  -->
            <div class="breadcrump-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="korando-breadcrump">
								<ul>
									<li><a href="index.php" title="Go to Home Page">Home</a></li>
									<li>Contact</li>
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
							<div class="main-content">
								<div class="section-title section-title-style1">
									<h2>Contact Us</h2>
								</div>							

			                    <div class="contact-us-area">
									<form id="contact-form" action="assets/mail.php" method="post">
										<p>Jot us a note and we’ll get back to you as quickly as possible.</p>
										<div class="korando-form-group form-group">
											<label>Name <sup>*</sup></label>
											<input type="text" name="name" class="control-form">
										</div>
										<div class="korando-form-group form-group">
											<label>Email <sup>*</sup></label>
											<input type="text" name="email" class="control-form">
										</div>
										<div class="korando-form-group form-group">
											<label>Phone <sup>*</sup></label>
											<input type="text" name="phone" class="control-form">
										</div>
										<div class="korando-form-group form-group">
											<label>Message <sup>*</sup></label>
											<textarea name="message" class="control-form"></textarea>
										</div>
										<div class="korando-form-group form-group submit-button">
											<input type="submit" class="control-form" value="Submit">
										</div>
									</form>
									<p class="form-messege"></p>							
								</div>

                                <div class="contact-map">	
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.3687241693822!2d79.86362300000002!3d6.833523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a8c9e3e4d69edfe!2sOrix%2C+Gems%26Jewellars!5e0!3m2!1sen!2slk!4v1545640196027" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
