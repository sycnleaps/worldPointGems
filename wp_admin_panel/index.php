<?php
require_once("db.php");
error_reporting(0);
session_start();
if(isset($_SESSION['uid']) && isset($_SESSION['admin'])) {
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
	<script src="../../../cdn-cgi/apps/head/7qcG4VvvlXlCsskpW4YyDmv4ClE.js"></script>
	<link rel="shortcut icon" href="images/ico/favicon.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/plugin.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="css/icons.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	
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
<!--							<a href="index.html" class="dashboard-logo"><img src="images/logo1.png" alt=""></a>-->
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
							<li class="active">Dashboard</li>
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
									<li class="active"><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
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
					<!-- Navigation / End -->

					
					<div class="col-sm-9">
						<!-- Content
						================================================== -->
						<div class="dashboard-content">
							<div class="row">

								<!-- Item -->
								<div class="col-lg-3 col-md-6">
									<div class="dashboard-stat color-1">
										<div class="dashboard-stat-content"><h4>0</h4> <span>Main Products</span></div>
										<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
									</div>
								</div>

								<!-- Item -->
								<div class="col-lg-3 col-md-6">
									<div class="dashboard-stat color-2">
										<div class="dashboard-stat-content"><h4>0</h4> <span>Sub Products</span></div>
										<div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
									</div>
								</div>


								<!-- Item -->
								<div class="col-lg-3 col-md-6">
									<div class="dashboard-stat color-3">
										<div class="dashboard-stat-content"><h4>0</h4> <span>Total Products</span></div>
										<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
									</div>
								</div>

								<!-- Item -->
								<div class="col-lg-3 col-md-6">
									<div class="dashboard-stat color-4">
										<div class="dashboard-stat-content"><h4>0</h4> <span>Total Site View</span></div>
										<div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 traffic">
									<div class="dashboard-list-box">
										<h4>Gem of the Day <a href="gem_of_the_day.php"><i title="Edit" class="sl sl-icon-settings"></i></a></h4>
										<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
												<th>Name</th>
												<th>Main Category</th>
												<th>Image</th>
											</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM product WHERE gem_of_the_day=1";
											$result = mysqli_query($conn, $sql);

											while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row["name"]; ?></td>
													<td><?php
														$typeSql = "SELECT * FROM maincategory WHERE id=$row[gem_category]";
														$resultType = mysqli_query($conn, $typeSql);
														$typeRow = mysqli_fetch_array($resultType);
														echo $typeRow["name"]; ?>
													</td>
													<td><img style="width: 50px" src="../<?php echo $row["image1"]; ?>"> </td>


												</tr>
												<?php
											}
											?>
											</tfoot>
										</table>
									</div>
								</div>


								<div class="col-lg-6 col-md-6 traffic">
									<div class="dashboard-list-box">
										<h4>Popular Gemstones <a href="popular_gem_stones"><i title="Edit" class="sl sl-icon-settings"></i></a></h4>
										<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
												<th>Name</th>
												<th>Main Category</th>
												<th>Image</th>
											</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM subcategory WHERE popular_gem=1";
											$result = mysqli_query($conn, $sql);

											while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row["name"]; ?></td>
													<td><?php
														$typeSql = "SELECT * FROM maincategory WHERE id=$row[mainCategory]";
														$resultType = mysqli_query($conn, $typeSql);
														$typeRow = mysqli_fetch_array($resultType);
														echo $typeRow["name"]; ?>
													</td>

													<td><img style="width: 50px" src="../<?php echo $row["image"]; ?>"> </td>


												</tr>
												<?php
											}
											?>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 traffic">
									<div class="dashboard-list-box">
										<h4>Recent Gems <a href="gem_of_the_day.php"><i title="Edit" class="sl sl-icon-settings"></i></a></h4>
										<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
												<th>Name</th>
												<th>Main Category</th>
												<th>Type</th>
												<th>Image</th>
											</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM product WHERE recent_product=1";
											$result = mysqli_query($conn, $sql);

											while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row["name"]; ?></td>
													<td><?php
														$typeSql = "SELECT * FROM maincategory WHERE id=$row[gem_category]";
														$resultType = mysqli_query($conn, $typeSql);
														$typeRow = mysqli_fetch_array($resultType);
														echo $typeRow["name"]; ?>
													</td>
													<td><?php
														$typeSql = "SELECT * FROM subcategory WHERE id=$row[gem_type]";
														$resultType = mysqli_query($conn, $typeSql);
														$typeRow = mysqli_fetch_array($resultType);
														echo $typeRow["name"]; ?>
													</td>
													<td><img style="width: 50px" src="../<?php echo $row["image1"]; ?>"> </td>


												</tr>
												<?php
											}
											?>
											</tfoot>
										</table>
									</div>
								</div>


								<div class="col-lg-6 col-md-6 traffic">
									<div class="dashboard-list-box">
										<h4>Exclusive Jewellery <a href="popular_gem_stones"><i title="Edit" class="sl sl-icon-settings"></i></a></h4>
										<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
												<th>Name</th>
												<th>Main Category</th>
												<th>Image</th>
											</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM subcategory WHERE exclusive_jewellery=1";
											$result = mysqli_query($conn, $sql);

											while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row["name"]; ?></td>
													<td><?php
														$typeSql = "SELECT * FROM maincategory WHERE id=$row[mainCategory]";
														$resultType = mysqli_query($conn, $typeSql);
														$typeRow = mysqli_fetch_array($resultType);
														echo $typeRow["name"]; ?>
													</td>

													<td><img style="width: 50px" src="../<?php echo $row["image"]; ?>"> </td>


												</tr>
												<?php
											}
											?>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Content / End -->
					</div>

				</div>

			</div>

			<!-- Copyrights -->
			<div class="copyrights">© 2018 SyncLeaps Technologies. All Rights Reserved.</div>
		</div>
		<!-- Dashboard / End -->
	</div>
	<!-- end Container Wrapper -->

	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,fr,hi,it,ja,ko,nl,ru,th,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<!-- Core JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Result Page JS -->
<script src="js/jpanelmenu.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/core-plugins.js"></script>
<script src="../../../../canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="js/chart.js"></script>
<script src="js/dashboard-custom.js"></script>
</body>
</html>
<?php
} else {
	header("location: login.php");
}
?>