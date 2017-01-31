<?php

	// include_once("inc/autoload.php");
	
	// if(!empty($_SESSION['id']) && !empty($_SESSION['acctype'])) {
	// 	header("location: admin/index.php");
	// } else if (!empty($_COOKIE['uid']) && !empty($_COOKIE['acctype'])) {
	// 	$_SESSION['id'] = $_COOKIE['uid'];
	// 	$_SESSION['acctype'] = $_COOKIE['acctype'];
	// 	header("location: admin/index.php");
	// }

?>
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
<head>
		<meta charset="utf-8">
		<title>Care Medico | Login</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="assets/fonts/fontello/css/fontello.css" rel="stylesheet">
		<link href="assets/css/animations.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" >
		<style type="text/css">
			.logbtn_div {
				text-align: center;
			}
			.logbtn_toggles {
				width: 100px;
				height: 100px;
				border-radius: 100%;
				background-color: #703a92;
				color: white;
				font-weight: bold;
				font-size: 1.5em;
				padding: 15px;
				margin: 10px 56px -10px 56px;
				box-shadow: 1px 5px 5px rgba(0, 0, 0, 0.1);
			}
			.logbtn_toggles:hover {
				cursor: pointer;
				box-shadow: 1px 5px 7px rgba(0, 0, 0, 0.5);
			}
		</style>
	</head>

	<body class="no-trans front-page" style="background-image: url('images/bg1.jpg');background-size: cover;background-repeat: no-repeat;background-attachment: fixed;background-position: center;">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		

		<div style="width: 26%;margin-left: 37%;margin-right: 37%;padding-top: 50px;">
			<h1><span class="logo-font"><span class="text-default">Care Medico</span></span></h1><br />
			<div class="widget-container" style="border-radius: 5px;">
				<div class="heading">
					<h3 style="color: rgb(5,150,250);margin: 5px;"><b>Login</b></h3><hr />
					<span style="color: red;"></span>
					<div id="list">
						<div class="row">
							<div class="logbtn_div col-md-6">
								<div class="logbtn_toggle logbtn_toggles" id="patient"><img src="images/patient.png"></div><br>
								<span>Patient Login</span>
							</div>
							<div class="logbtn_div col-md-6">
								<div class="logbtn_toggle logbtn_toggles" id="doctor"><img src="images/doctor.png"></div><br>
								<span>Doctor Login</span>
							</div>
						</div>
					</div>
					<div class="form_div" id="patient_form" style="display: none;padding: 0px 20px;">
						<form action="pages/login.php" method="post">
							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Email" required></input>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<input type="password" name="password" class="form-control" placeholder="Password" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<div style="display: none;">
								<input type="text" name="type" value="1">
							</div>
							<div class="form-group">
								&nbsp;<input type="checkbox" name="remember"> &nbsp;Remember Me</input>
							</div>
							<button type="submit" name="submit0" class="btn btn-primary form-control">Login as a Patient</button>
						</form>
						<a href="#" class="logbtn_toggle" id="doctor">Sign In as Doctor</a>
					</div>
					<div class="form_div" id="doctor_form" style="display: none;padding: 0px 20px;">
						<form action="pages/login.php" method="post">
							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Email" required></input>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<input type="password" name="password" class="form-control" placeholder="Password" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<div style="display: none;">
								<input type="text" name="type" value="1">
							</div>
							<div class="form-group">
								&nbsp;<input type="checkbox" name="remember"> &nbsp;Remember Me</input>
							</div>
							<button type="submit" name="submit0" class="btn btn-primary form-control">Login as a Doctor</button>
						</form>
						<a href="#" class="logbtn_toggle" id="patient">Sign In as Patient</a>
					</div>
				</div>
			</div>
			<p style="font-size: 1.1em;text-align: center;line-height: .7em;"><a href="forgot.php" style="color: red;">Forgot Password?</a></p>
			<p style="font-size: 1.1em;text-align: center;line-height: .7em;">New User?<a href="signup.php">Click Here</a></p>
		</div>


		<script type="text/javascript" src="assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(".logbtn_toggle").click(function() {
				$("#list, .form_div").hide();
				id = $(this).attr("id") + "_form";
				$("#"+id).show();
			});
		</script>
		
	</body>
</html>
