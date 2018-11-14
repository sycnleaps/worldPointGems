<?php
session_start();
error_reporting(0);
require_once("db.php");
if(isset($_SESSION['uid']) && isset($_SESSION['admin'])) {

$typeId = $_GET["typeId"];

if(isset($typeId)) {
	$sql = "SELECT * FROM subcategory WHERE id=$typeId";
	$result = mysqli_query($conn, $sql);
	$type_row = mysqli_fetch_array($result);
}

if(isset($_POST['updateType'])) {
	if (count($_POST) > 0) {
		$gem_category = $_POST["gem_category"];
		$name = $_POST["name"];
		$description = $_POST["description"];
		$small_description = $_POST["small_description"];
		$popular_gemstone = $_POST["popular_gemstone"];
		$exclusive_jewellery = $_POST["exclusive_jewellery"];
		$image_edit = $_POST["image_edit"];
		$now = date('Y-m-d H:i:s');

		// FILE UPLOAD
		$target_upload_dir = "assets/img/types/";


		// IMAGE 01
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type =$_FILES['image']['type'];
		$file_ext =strtolower(end(explode('.',$_FILES['image']['name'])));

		$gem_name = str_replace(' ', '_', $name);
		$time_stamp = time();

		if($file_size == 0) {
			$image_location = $image_edit;
		} else {
			$image_location = $target_upload_dir . $gem_name . $time_stamp . basename($file_name);
			move_uploaded_file($file_tmp, "../" . $image_location);
		}

		$sql = "UPDATE subcategory set mainCategory='$gem_category', name='$name',description='$description', small_description='$small_description', popular_gem='$popular_gemstone',exclusive_jewellery='$exclusive_jewellery',image='$image_location',created_date='$now',updated_date='$now' WHERE id='$typeId'";
		mysqli_query($conn, $sql);

		//if ($sql === TRUE) {
			$message = " ".$name." Type Updated Successfully";
		//} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		//}
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
						<form name="updateType" method="post" action="#" enctype="multipart/form-data">
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
												<h3><i class="sl sl-icon-doc"></i> Update Product Type - <strong style="color: #0B4D81;"><?php echo $type_row["name"]; ?></strong></h3>
											</div>

											<!-- Row -->
											<div class="row with-forms">

												<!-- Status -->
												<div class="col-md-6">
													<h5>Main Category</h5>
													<select name='gem_category'>
														<?php
														$sql = "SELECT * FROM maincategory";
														$result = mysqli_query($conn, $sql);
														while ($row = mysqli_fetch_array($result)) {
															?>
															<option
																value="<?php echo $row["id"]; ?>" <?php if ($row["id"] == $type_row["mainCategory"]) {
																echo 'selected';
															} ?>><?php echo $row["name"]; ?></option>";
															<?php
														}
														?>
													</select>
												</div>

											</div>
											<!-- Row / End -->

											<!-- Title -->
											<div class="row with-forms">
												<div class="col-md-12">
													<h5>Product Name <i class="tip" data-tip-content="Name of the Type"></i></h5>
													<input class="search-field" type="text" name="name" value="<?php echo $type_row["name"]; ?>"/>
												</div>
											</div>

											<!-- Checkboxes -->
											<h5 class="margin-top-30 margin-bottom-10">Main Page Display </h5>
											<div class="checkboxes in-row margin-bottom-20">
												<input id="check-a" type="checkbox" name="popular_gemstone" value="1" <?php if ($type_row["popular_gem"] == '1') {
													echo 'checked'; } ?>>
												<label for="check-a">Popular Gemstone</label>

												<input id="check-b" type="checkbox" name="exclusive_jewellery" value="1" <?php if ($type_row["exclusive_jewellery"] == '1') {
													echo 'checked'; } ?>>
												<label for="check-b">Exclusive Jewellery</label>
											</div>
											<!-- Checkboxes / End -->


												</div>
										<!-- Section / End -->

										<div class="add-listing-section">

											<!-- Headline -->
											<div class="add-listing-headline">
												<h3><i class="sl sl-icon-docs"></i> Details</h3>
											</div>

											<!-- Description -->
											<div class="form">
												<h5>Small Description</h5>
												<textarea class="WYSIWYG" name="small_description" cols="40" rows="1" id="summary" spellcheck="true"><?php echo $type_row["description"]; ?></textarea>
											</div>
											<div class="form">
												<h5>Long Description</h5>
												<textarea class="WYSIWYG" name="description" cols="40" rows="1" id="summary" spellcheck="true"><?php echo $type_row["description"]; ?></textarea>
											</div>
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
												<div class="col-md-4">
													<h5>Image 01 <span>(Preview Img, 300px X 300px)</span></h5>
													<img id="image" src="../<?php echo $type_row["image"]; ?>" alt="" width="130px" />
													<input type="hidden" name="image_edit" value="<?php echo $type_row["image"]; ?>"/>
													<input type="file" onchange="readURL(this, 'image');" name="image" value="vch"/>
												</div>

											</div>
										</div>
										<!-- Section / End -->

										<input type="submit" class="button preview" name="updateType" value="Update">
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