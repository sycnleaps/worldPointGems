<?php
session_start();
error_reporting(0);
require_once("db.php");
if(isset($_SESSION['uid']) && isset($_SESSION['admin'])) {

$deleteId = $_GET["deleteId"];
$message = $_GET["msg"];

if(isset($deleteId)) {
	$sql = "DELETE FROM subcategory WHERE id=$deleteId";
	$result = mysqli_query($conn, $sql);
	header("Location:view_product_types.php?msg=2");
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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" media="screen">

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
								<li><a href="login.php"><i class="sl sl-icon-power"></i> Logout</a></li>
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
							<li><a href="#">Home</a></li>
							<li class="active">View Product</li>
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
									<li class="active"><a href="view_product_types.php"><i class="sl sl-icon-settings"></i> View Product Type</a></li>
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
						<form name="addProduct" method="post" action="#" enctype="multipart/form-data">
						<div class="dashboard-content">
							<div class="row">
								<!-- Listings -->

								<div class="col-lg-12 col-sm-12">

									<?php if(isset($message)) {
										echo '<div class="alert alert-danger"><strong>Product Type Deleted!</strong>';
										echo '</div>';
									} ?>

									<table id="example" class="table table-striped table-bordered" style="width:100%">
										<thead>
										<tr>
											<th>Name</th>
											<th>Main Category</th>
											<th>Description</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php
											$sql = "SELECT * FROM subcategory ORDER BY mainCategory ASC";
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
													<td><?php echo $row["description"]; ?></td>
													<td><img style="width: 75px" src="../<?php echo $row["image"]; ?>"> </td>

													<td><a href="edit_product_type.php?typeId=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary"
														   title="Edit">
															<span class="glyphicon glyphicon-pencil"></span>
														</a>
														<a href="view_product_types.php?deleteId=<?php echo $row["id"]; ?>"
														   name="delete" type="button" class="btn btn-danger"
														   title="Remove">
															<span class="glyphicon glyphicon-remove"></span>
														</a></td>
												</tr>
												<?php
											}
										?>
										</tfoot>
									</table>
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
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script>
	$(document).ready(function() {
	$('#example').DataTable();
	} );
	</script>
<!-- Result Page JS -->
<script src="js/jpanelmenu.min.js"></script>
<script src="js/core-plugins.js"></script>
<script src="js/dashboard-custom.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

</body>
</html>
	<?php
} else {
	header("location: login.php");
}
?>