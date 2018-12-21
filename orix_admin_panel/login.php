<?php
session_start();
error_reporting(0);
require_once("db.php");
unset($_SESSION['uid']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['admin']);
session_destroy();
//if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
//print_r("Done");
//	$username = mysqli_real_escape_string($conn, $_POST['username']);
//	$password = mysqli_real_escape_string($conn, $_POST['password']);
//
//	$sql = "SELECT * FROM users WHERE email = '$username' and password = '$password'";
//	$result = mysqli_query($conn, $sql);
//	$row = mysqli_fetch_array($result);
//	//$login = mysqli_query($conn, "SELECT * FROM users WHERE email = 'sampath.lasantha07@gmail.com' and password = 'admin@wpgems'");
//	//$login = mysqli_query($conn, "SELECT * FROM users WHERE email = '$username' and password = '$password'");
//	// Check username and password match
//
//	if ($row) {
//		// Set username session variable
//		$_SESSION['first_name'] = $row['first_name'];
//		$_SESSION['last_name'] = $row['last_name'];
//
//		// Jump to secured page
//		header('Location: index.php');
//	}
//	else {
//		$msgClass = 'alert-danger';
//		$msg = 'Wrong username or password';
//		header('Location:login.php');
//	}
//}
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

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Add your style -->
	<link href="css/your-style.css" rel="stylesheet">
	
</head>

<body class="home-three transparent-header">

	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<!-- hero image start -->
			<div class="hero-header sign-in-out">
				<div class="hero-image sign-inner"></div>
	        	<!-- Start Header Centralizer -->

			    <div class="bg-container bg-media">
			      	<img class="clear-image" src="images/login_back.jpg" style="" alt="header-image">
			      	
			      	<div class="hero">
						<div class="container">

							<div class="row">
								<div class="col-xs-offset-2 col-sm-4">

									<!-- start Sign-in -->
									<div id="" class="login-box-wrapper">
										<form action="login_setup.php" method="post">
											<div class="modal-header">
												<h4 class="modal-title text-center"><i class="fa fa-sign-in"></i> Log In
												</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label for="exampleInputEmail1">E mail</label>
															<input type="email" class="form-control" name="username"
																   placeholder="Enter E mail">
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group">
															<label for="exampleInputEmail1">Password</label>
															<input type="password" class="form-control" name="password"
																   placeholder="Enter Password">
														</div>
													</div>
												</div>
											</div>

											<?php
											if($_REQUEST["action"]=="login_invalid"){
												echo '<div class="alert alert-danger alert-dismissable">';
												echo "Invalid email or password.";
												echo '</div>';
											}
											?>
											<?php
											if($_REQUEST["action"]=="login_empty"){
												echo '<div class="alert alert-danger alert-dismissable">';
												echo "All fields are required.";
												echo '</div>';
											}
											?>

											<div class="modal-footer text-center">
												<button type="submit" name="login" class="btn btn-primary">Login</button>
											</div>
										</form>
									</div>
									<!-- end Sign-in  -->
									
								</div>
							</div>

						</div>
					</div><!-- end hero -->

			    </div>
	      	</div>
	      	<!-- hero image end -->
		</div>
		<!-- end Main Wrapper -->
		
	</div>
	<!-- end Container Wrapper -->

 
<!-- Core JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/cursor-trails.js"></script>
<script src="js/core-plugins.js"></script>
<script src="js/customs.js"></script>

<!-- Only in Home Page -->
<script src="js/jquery.flexdatalist.js"></script>

</body>
</html>