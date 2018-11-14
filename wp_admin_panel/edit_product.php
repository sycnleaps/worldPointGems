<?php
session_start();
error_reporting(0);
require_once("db.php");
if(isset($_SESSION['uid']) && isset($_SESSION['admin'])) {

$gem = $_GET["gemId"];

if(isset($gem)) {
	$sql = "SELECT * FROM product WHERE id=$gem";
	$result = mysqli_query($conn, $sql);
	$gem_row = mysqli_fetch_array($result);
}

if(isset($_POST['updateProduct'])) {
	if (count($_POST) > 0) {
		$gem_category = $_POST["gem_category"];
		$gem_type = $_POST["gem_type"];
		$gem_of_the_day = $_POST["gem_of_the_day"];
		$recent_product = $_POST["recent_product"];
		$name = $_POST["name"];
		$small_description = $_POST["small_description"];
		$long_description = $_POST["long_description"];
		$price = $_POST["price"];
		$offer_price = $_POST["offer_price"];
		$availability = $_POST["availability"];
		$sku = $_POST["sku"];
		$origin = $_POST["origin"];
		$dimensions = $_POST["dimensions"];
		$treatment = $_POST["treatment"];
		$color = $_POST["color"];
		$weight = $_POST["weight"];
		$certification = $_POST["certification"];
		$shape = $_POST["shape"];
		$cut = $_POST["cut"];
		$now = date('Y-m-d H:i:s');

		$video_edit = $_POST["video_edit"];
		$image1_edit = $_POST["image1_edit"];
		$image2_edit = $_POST["image2_edit"];
		$image3_edit = $_POST["image3_edit"];
		$image4_edit = $_POST["image4_edit"];
		$image5_edit = $_POST["image5_edit"];

		// FILE UPLOAD
		$target_dir = "assets/img/".$gem_category."/";
		$target_upload_dir = "assets/img/".$gem_category."/";
		$expensions= array("jpeg","jpg","png", "mp3", "mp4", "wma");

		// VIDEO
		$file_name_video = $_FILES['video']['name'];
		$file_size_video =$_FILES['video']['size'];
		$file_tmp_video =$_FILES['video']['tmp_name'];
		$file_type_video =$_FILES['video']['type'];
		$file_ext_video =strtolower(end(explode('.',$_FILES['video']['name'])));

		if(in_array($file_ext_video,$expensions)=== false){
			$errors[]="Extension not allowed, please choose a MP4 file.";
		}

		if($file_size_video > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		// IMAGE 01
		$file_name1 = $_FILES['image1']['name'];
		$file_size1 =$_FILES['image1']['size'];
		$file_tmp1 =$_FILES['image1']['tmp_name'];
		$file_type1 =$_FILES['image1']['type'];
		$file_ext1 =strtolower(end(explode('.',$_FILES['image1']['name'])));

		if(in_array($file_ext1,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size1 > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		// IMAGE 02
		$file_name2 = $_FILES['image2']['name'];
		$file_size2 =$_FILES['image2']['size'];
		$file_tmp2 =$_FILES['image2']['tmp_name'];
		$file_type2 =$_FILES['image2']['type'];
		$file_ext2 =strtolower(end(explode('.',$_FILES['image2']['name'])));

		if(in_array($file_ext2,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size2 > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		// IMAGE 03
		$file_name3 = $_FILES['image3']['name'];
		$file_size3 =$_FILES['image3']['size'];
		$file_tmp3 =$_FILES['image3']['tmp_name'];
		$file_type3 =$_FILES['image3']['type'];
		$file_ext3 =strtolower(end(explode('.',$_FILES['image3']['name'])));

		if(in_array($file_ext3,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size3 > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		// IMAGE 03
		$file_name4 = $_FILES['image4']['name'];
		$file_size4 =$_FILES['image4']['size'];
		$file_tmp4 =$_FILES['image4']['tmp_name'];
		$file_type4 =$_FILES['image4']['type'];
		$file_ext4 =strtolower(end(explode('.',$_FILES['image4']['name'])));

		if(in_array($file_ext4,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size4 > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		// IMAGE 05
		$file_name5 = $_FILES['image5']['name'];
		$file_size5 =$_FILES['image5']['size'];
		$file_tmp5 =$_FILES['image5']['tmp_name'];
		$file_type5 =$_FILES['image5']['type'];
		$file_ext5 =strtolower(end(explode('.',$_FILES['image5']['name'])));

		if(in_array($file_ext5,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size5 > 2097152){
			$errors[]='File size must be excately 2 MB';
		}

		$gem_name = str_replace(' ', '_', $name);
		$time_stamp = time();

		if($file_size_video == 0) {
			$video_location = $video_edit;
		} else {
			$video_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name_video);
			move_uploaded_file($file_tmp_video, "../" . $video_location);
		}

		if($file_size1 == 0) {
			$image1_location = $image1_edit;
		} else {
			$image1_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name1);
			move_uploaded_file($file_tmp1, "../" . $image1_location);
		}

		if($file_size2 == 0) {
			$image2_location = $image2_edit;
		} else {
			$image2_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name2);
			move_uploaded_file($file_tmp2, "../" . $image2_location);
		}

		if($file_size3 == 0) {
			$image3_location = $image3_edit;
		} else {
			$image3_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name3);
			move_uploaded_file($file_tmp3, "../" . $image3_location);
		}

		if($file_size4 == 0) {
			$image4_location = $image4_edit;
		} else {
			$image4_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name4);
			move_uploaded_file($file_tmp4, "../" . $image4_location);
		}

		if($file_size5 == 0) {
			$image5_location = $image5_edit;
		} else {
			$image5_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name5);
			move_uploaded_file($file_tmp5, "../" . $image5_location);
		}

//		if($file_name_video != '') {
//
//			print_r('ddd');
//			$video_location = $video_edit;
//		} elseif ($file_name1 != '') {
//			print_r('ddd');
//			$image1_location = $image1_edit;
//		} elseif ($file_name2 != '') {
//			print_r('ddd');
//			$image2_location = $image2_edit;
//		} elseif ($file_name3 != '') {
//			print_r('ddd');
//			$image3_location = $image3_edit;
//		} elseif ($file_name4 != '') {
//			print_r('ddd');
//			$image4_location = $image4_edit;
//		} elseif ($file_name5 != '') {
//			print_r('ddd');
//			$image5_location = $image5_edit;
//		} else {
//			$video_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name_video);
//			$image1_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name1);
//			$image2_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name2);
//			$image3_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name3);
//			$image4_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name4);
//			$image5_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name5);
//
//			move_uploaded_file($file_tmp_video, "../" . $video_location);
//			move_uploaded_file($file_tmp1, "../" . $image1_location);
//			move_uploaded_file($file_tmp2, "../" . $image2_location);
//			move_uploaded_file($file_tmp3, "../" . $image3_location);
//			move_uploaded_file($file_tmp4, "../" . $image4_location);
//			move_uploaded_file($file_tmp5, "../" . $image5_location);
//		}

//		$video_location = "$target_dir$gem_name$time_stamp$file_name_video"; //Video Location
//		$image1_location = "$target_dir$gem_name$time_stamp$file_name1"; //Image 01 Location
//		$image2_location = "$target_dir$gem_name$time_stamp$file_name2"; //Image 02 Location
//		$image3_location = "$target_dir$gem_name$time_stamp$file_name3"; //Image 03 Location
//		$image4_location = "$target_dir$gem_name$time_stamp$file_name4"; //Image 04 Location
//		$image5_location = "$target_dir$gem_name$time_stamp$file_name5"; //Image 05 Location


//		echo "GEM CAT-" . $gem_category;
//		echo ",GEM TYPE-" . $gem_type;
//		echo ",GEM OF THE DAY-" . $gem_of_the_day;
//		echo ",RECENT GEM-" . $recent_product;
//		echo "NAME-" . $name;
//		echo ",SAMLL DES-" . $small_description;
//		echo ",LONG DES-" . $long_description;
//		echo ",PRICE-" . $price;
//		echo ",OFFER PRICE-" . $offer_price;
//		echo ",AVAILABLITY-" . $availability;
//		echo ",SKU-" . $sku;
//		echo ",ORIGIN-" . $origin;
//		echo ",DIMENSEIONS-" . $dimensions;
//		echo ",TREATMENT-" . $treatment;
//		echo ",COLOR-" . $color;
//		echo ",WEIGHT-" . $weight;
//		echo ",CERTIFICATION-" . $certification;
//		echo ",SHAPE-" . $shape;
//		echo ",CUT-" . $cut;
//		echo ",VIDEO-" . $video_location;
//		echo ",IMAGE1-" . $image1_location;
//		echo ",IMAGE2-" . $image2_location;
//		echo ",IMAGE3-" . $image3_location;
//		echo ",IMAGE4-" . $image4_location;
//		echo ",IMAGE5-" . $image5_location;
//		echo ",NOW-" . $now;

		$sql = "UPDATE product set gem_category='$gem_category', gem_type='$gem_type',gem_of_the_day='$gem_of_the_day',recent_product='$recent_product',name='$name',small_description='$small_description',long_description='$long_description',price='$price',offer_price='$offer_price',availability='$availability',sku='$sku',origin='$origin',dimensions='$dimensions',treatment='$treatment',color='$color',weight='$weight',certification='$certification',shape='$shape',cut='$cut',video='$video_location',image1='$image1_location',image2='$image2_location',image3='$image3_location',image4='$image4_location',image5='$image5_location',created_date='$now',updated_date='$now' WHERE id='$gem'";
		mysqli_query($conn, $sql);
		$message = " ".$name." Product Updated Successfully";
	}
}
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Admin Panel - World Point Gems</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav Icons -->
	<script src="../../../cdn-cgi/apps/head/7qcG4VvvlXlCsskpW4YyDmv4ClE.js"></script><link rel="shortcut icon" href="images/ico/favicon.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/main.css" rel="stylesheet">
	<link href="css/plugin.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="css/icons.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Add your style -->
	<link href="css/your-style.css" rel="stylesheet">
	
</head>

<body class="home transparent-header">

	<!-- start Container Wrapper -->
	<div id="container-wrapper">

		<!-- Header Container
		================================================== -->
		<header id="header-container" class="fixed fullwidth dashboard">

			<!-- Header -->
			<div id="header" class="not-sticky">
				<div class="container">
					<!-- Left Side Content -->
					<div class="left-side">
						<!-- Logo -->
						<div id="logo">
<!--							<a href="index.php" class="dashboard-logo"><img src="images/logo1.png" alt=""></a>-->
						</div>

						<!-- Mobile Navigation -->
						<div class="menu-responsive">
							<i class="fa fa-reorder menu-trigger"></i>
						</div>

						<!-- Main Navigation -->
						<nav id="navigation" class="style-1 pull-right">
							<ul id="responsive">
								<li><a href="index.php">Welcome <?php
										echo "".$_SESSION['fname']." ".$_SESSION['lname']."";
										?></a></li>
								<li><a href="logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
							</ul>
						</nav>
						<div class="clearfix"></div>
						<!-- Main Navigation / End -->
					</div>
					<!-- Left Side Content / End -->

				</div>
			</div>
			<!-- Header / End -->
		</header>

		<div class="clearfix"></div>
		<!-- Header Container / End -->

		<div class="breadcrumb-wrapper dash-bread">
			
			<div class="container">

				<div class="row">
				
					<div class="col-xs-12 col-sm-8">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Edit Product</li>
						</ol>
					</div>
					
				</div>

			</div>
		</div>

		<!-- Dashboard -->
		<div id="dashboard">

			<!-- Navigation
			================================================== -->

			<!-- Responsive Navigation Trigger -->
			<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="dashboard-nav">
							<div class="profile-sec">
								<div class="dash-image"><img src="images/team/01.jpg" alt=""></div>
								<div class="dash-content">
									<h3><?php
										echo "".$_SESSION['fname']." ".$_SESSION['lname']."";
										?></h3>
									<span>Administrator</span>
								</div>
							</div>
							<div class="dashboard-nav-inner">
								<ul>
									<li><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
									<li><a href="add_product_type.php"><i class="sl sl-icon-settings"></i> Add Product Type</a></li>
									<li><a href="view_product_types.php"><i class="sl sl-icon-settings"></i> View Product Type</a></li>
									<li>
										<a><i class="sl sl-icon-layers"></i> Product Listing</a>
										<ul>
											<?php
											$sql = "SELECT * FROM maincategory";
											$result = mysqli_query($conn, $sql);

											while ($row = mysqli_fetch_array($result)) {
												?>
												<li><a href="view_gems.php?gc=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
												<?php
											}
											?>
										</ul>
									</li>
									<li><a href="add_product.php"><i class="sl sl-icon-plus"></i> Add Products</a></li>
<!--									<li><a href="add_product_type.php"><i class="sl sl-icon-plus"></i> Add Gem Types</a></li>-->
									<!--									<li><a href="change_password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>-->
								</ul>
							</div>
						</div>
					</div>
				<!-- Content
				================================================== -->
					<div class="col-sm-9">
						<form name="updateProduct" method="post" action="#" enctype="multipart/form-data">
						<div class="dashboard-content">
							<div class="row">
								<!-- Listings -->
								<div class="col-lg-12 col-sm-12">

									<?php if(isset($message)) {
										echo '<div class="alert alert-success"><strong>Success!</strong>';
										echo $message;
										echo '</div>';
									} ?>

									<div id="add-listing">
										<!-- Section -->
										<div class="add-listing-section">

											<!-- Headline -->
											<div class="add-listing-headline">
												<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
											</div>

											<!-- Title -->
											<div class="row with-forms">
												<div class="col-md-12">
													<h5>Product Name <i class="tip" data-tip-content="Name of the Gem"></i></h5>
													<input class="search-field" type="text" name="name" value="<?php echo $gem_row["name"]; ?>"/>
												</div>
											</div>

											<!-- Row -->
											<div class="row with-forms">

												<!-- Status -->
												<div class="col-md-6">
													<h5>Gem Category</h5>
													<select name='gem_category'>
														<?php
														$sql = "SELECT * FROM maincategory";
														$result = mysqli_query($conn, $sql);
														while ($row = mysqli_fetch_array($result)) {
															?>
															<option
																value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $gem_row["gem_category"]) {
																echo 'selected';
															} ?>><?php echo $row["name"]; ?></option>";
															<?php
														}
														?>
													</select>
												</div>

												<!-- Type -->
												<div class="col-md-6">
													<h5>Gem Type</h5>
													<select name='gem_type'>
														<?php
														$sql = "SELECT * FROM subcategory";
														$result = mysqli_query($conn, $sql);
														while ($row = mysqli_fetch_array($result)) {
															?>
															<option
																value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $gem_row["gem_type"]) {
																echo 'selected';
															} ?>><?php echo $row["name"]; ?></option>";
															<?php
														}
														?>
													</select>
												</div>

											</div>
											<!-- Row / End -->
																						<!-- Checkboxes -->
											<h5 class="margin-top-30 margin-bottom-10">Main Page Display </h5>
											<div class="checkboxes in-row margin-bottom-20">
												<input id="check-a" type="checkbox" name="gem_of_the_day" value="1" <?php if ($gem_row["gem_of_the_day"] == '1') {
													echo 'checked'; } ?>>
												<label for="check-a">Gem of the Day</label>

												<input id="check-b" type="checkbox" name="recent_product" value="1" <?php if ($gem_row["recent_product"] == '1') {
													echo 'checked'; } ?>>
												<label for="check-b">Recent Product</label>
											</div>
											<!-- Checkboxes / End -->
										</div>
										<!-- Section / End -->
											<!-- Section -->
										<div class="add-listing-section">
											<!-- Headline -->
											<div class="add-listing-headline">
												<h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
											</div>

											<!-- Row -->
											<div class="row with-forms">
												<!-- Phone -->
												<div class="col-md-4">
													<h5>Price <span>(Rs. 50,000 or $250)</span></h5>
													<input type="text" name="price" value="<?php echo $gem_row["price"]; ?>">
												</div>

												<!-- Website -->
												<div class="col-md-4">
													<h5>Offer Price <span>(Rs. 50,000 or $250)</span></h5>
													<input type="text" name="offer_price" value="<?php echo $gem_row["offer_price"]; ?>">
												</div>

												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Stock Availability</h5>
													<select name="availability">
														<option value="In Stock" <?php if ($gem_row["availability"] == 'In Stock') {
															echo 'selected'; } ?>>In Stock</option>
														<option value="Out of Stock" <?php if ($gem_row["availability"] == 'Out of Stock') {
															echo 'selected'; } ?>>Out of Stock</option>
													</select>
												</div>

											</div>
											<!-- Row / End -->
										</div>
										<!-- Section / End -->
<!-- Section -->
										<div class="add-listing-section">

											<!-- Headline -->
											<div class="add-listing-headline">
												<h3><i class="sl sl-icon-docs"></i> Details</h3>
											</div>

											<!-- Description -->
											<div class="form">
												<h5>Small Description</h5>
												<textarea class="WYSIWYG" name="small_description" cols="40" rows="1" id="summary" spellcheck="true"><?php echo $gem_row["small_description"]; ?></textarea>
											</div>

											<div class="form">
												<h5>Long Description</h5>
												<textarea class="WYSIWYG" name="long_description" cols="40" rows="3" id="summary" spellcheck="true"><?php echo $gem_row["long_description"]; ?></textarea>
											</div>

														<!-- Row -->
											<div class="row with-forms">

												<!-- Phone -->
												<div class="col-md-4">
													<h5>SKU</h5>
													<input type="text" name="sku" value="<?php echo $gem_row["sku"]; ?>">
												</div>

												<!-- Website -->
												<div class="col-md-4">
													<h5>Origin</h5>
													<input type="text" name="origin" value="<?php echo $gem_row["origin"]; ?>">
												</div>

												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Dimensions</h5>
													<input type="text" name="dimensions" value="<?php echo $gem_row["dimensions"]; ?>">
												</div>

											</div>
											<!-- Row / End -->

																						<!-- Row -->
											<div class="row with-forms">

												<!-- Phone -->
												<div class="col-md-4">
													<h5>Treatment</h5>
													<input type="text" name="treatment" value="<?php echo $gem_row["treatment"]; ?>">
												</div>

												<!-- Website -->
												<div class="col-md-4">
													<h5>Colour</h5>
													<input type="text" name="color" value="<?php echo $gem_row["color"]; ?>">
												</div>

												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Weight</h5>
													<input type="text" name="weight" value="<?php echo $gem_row["weight"]; ?>">
												</div>

											</div>
											<!-- Row / End -->

											<div class="row with-forms">

												<!-- Phone -->
												<div class="col-md-4">
													<h5>Certification</h5>
													<input type="text" name="certification" value="<?php echo $gem_row["certification"]; ?>">
												</div>

												<!-- Website -->
												<div class="col-md-4">
													<h5>Shape</h5>
													<input type="text" name="shape" value="<?php echo $gem_row["shape"]; ?>">
												</div>

												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Cut</h5>
													<input type="text" name="cut" value="<?php echo $gem_row["cut"]; ?>">
												</div>

											</div>
											<!-- Row / End -->
										</div>
										<!-- Section / End -->
											<!-- Section -->
										<div class="add-listing-section">
											<!-- Headline -->
											<div class="add-listing-headline">
												<h3><i class="sl sl-icon-picture"></i> Gallery</h3>
											</div>
											<div class="row with-forms">
												<!-- Phone -->
												<div class="col-md-6">
													<h5>Video <span>(.MP4)</span></h5>
													<input type="hidden" name="video_edit" value="<?php echo $gem_row["video"]; ?>"/>
													<input type="file" name="video" value="<?php echo $gem_row["video"]; ?>"/>
												</div>
											</div>
											<div class="row with-forms">
												<!-- Phone -->
												<div class="col-md-4">
													<h5>Image 01 <span>(Preview Img, 300px X 300px)</span></h5>
													<img id="image1" src="../<?php echo $gem_row["image1"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image1_edit" value="<?php echo $gem_row["image1"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image1');" name="image1" value="vch"/>
												</div>

												<!-- Website -->
												<div class="col-md-4">
													<h5>Image 02 <span>(300px X 300px)</span></h5>
													<img id="image2" src="../<?php echo $gem_row["image2"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image2_edit" value="<?php echo $gem_row["image2"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image2');" name="image2" value="<?php echo $gem_row["image2"]; ?>"/>
												</div>

												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Image 03 <span>(300px X 300px)</span></h5>
													<img id="image3" src="../<?php echo $gem_row["image3"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image3_edit" value="<?php echo $gem_row["image3"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image3');" name="image3" value="<?php echo $gem_row["image3"]; ?>" />
												</div>
											</div>

											<div class="row with-forms">
												<!-- Email Address -->
												<div class="col-md-4">
													<h5>Image 04 <span>(300px X 300px)</span></h5>
													<img id="image4" src="../<?php echo $gem_row["image4"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image4_edit" value="<?php echo $gem_row["image4"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image4');" name="image4" value="<?php echo $gem_row["image4"]; ?>"/>
												</div>
												<!-- Phone -->
												<div class="col-md-4">
													<h5>Image 05 <span>(300px X 300px)</span></h5>
													<img id="image5" src="../<?php echo $gem_row["image5"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image5_edit" value="<?php echo $gem_row["image5"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image5');" name="image5" value="<?php echo $gem_row["image5"]; ?>"/>
												</div>
											</div>
										</div>
										<!-- Section / End -->

										<input type="submit" class="button preview" name="updateProduct" value="Update">
<!--										<a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>-->
									</div>
								</div>
							</div>		
						</div>
						</form>
					</div>
					<!-- Content / End -->
				</div>
			</div>
			
			<!-- Copyrights -->
			<div class="copyrights">© 2018 SyncLeaps Technologies. All Rights Reserved.</div>

		</div>
		<!-- Dashboard / End -->

	</div>
	<!-- end Container Wrapper -->
 

<!-- Core JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script>

	function readURL(input, bind) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#'+bind).attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
</body>
</html>
	<?php
} else {
	header("location: login.php");
}
?>