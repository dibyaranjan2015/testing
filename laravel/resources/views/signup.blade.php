<?php

	// ob_start();
	// require_once("inc/autoload.php");
	// $ses = new Session();
	// if ($ses->checkSession('email')) {
	// 	header("Location: index.php");
	// }
	// if (isset($_GET['e'])) {
	// 	$e = $_GET['e'];
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
		<title>Care Medico | Register</title>
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
		.tooltip {
			background-color: transparent;
		}
		.tooltip > .tooltip-inner {
			width: 500px;
			background-color: #f2f2f2 !important;
			color: red !important;
			border: 1px solid #555;
			padding: 10px;
		}
		</style>
	</head>

	<body class="no-trans front-page" style="background-image: url('images/bg1.jpg');background-size: inherit;background-repeat: no-repeat;background-attachment: fixed;background-position: center;">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		

		<div style="width: 360px;margin-left: auto;margin-right: auto;padding-top: 20px;">
			<h1><span class="logo-font"><span class="text-default">Care Medico</span></span> </h1>
			<div class="widget-container" style="border-radius: 5px;">
				<div class="heading" style="padding: 0px;">

					<h2 class="text-default" style="font-size: 1.5em;font-weight: bold;font-style: italic;text-decoration: underline;">Sign Up</h2>
					<span style="color: #a94442;text-align: center;">
						<?php if(isset($_GET['e'])&&$e==1){echo 'All fields are required';} ?>
					</span>
					<form id="signupform" action="pages/register.php" method="post" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
						<div>
								<div class="form-group has-feedback">
									<input type="text" name="name" class="form-control" placeholder="Name" required></input>
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<input type="email" name="email" class="form-control" placeholder="Email Id" required></input>
									<i class="fa fa-envelope form-control-feedback"></i>
									<span class="email-feedback" style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 2) {echo "This email already exists."; } ?></span>
								</div>
								<div class="form-group has-feedback">
									<input type="text" name="mob" class="form-control" placeholder="Contact Details" required></input>
									<i class="fa fa-phone form-control-feedback"></i>
									<span style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 3) {echo "This Mobile already exists."; } ?></span>
								</div>
								<div class="form-group has-feedback">
									<input type="password" id="password" name="password" class="form-control" placeholder="Password(minimum 6 characters)" required></input>
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<input type="password" id="password1" name="password1" class="form-control" placeholder="Retype Password" required></input>
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<select name="acctype" class="form-control" required>
										<option value="0" disabled>Register as</option>
										<option value="1">Patient</option>
										<option value="2">Doctor</option>
									</select>
								</div>
								<div class="form-group">
									<p style="text-align: center;">By submitting this form you accept all our <a href="#" style="color: green;">terms and conditions</a></p>
								</div>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Register</button>
						</div>
					</form>
				</div>
			</div>
			<p id="log-redirect" style="font-size: 1.3em;text-align: center;line-height: 1em;color: green;text-shadow: 1px 1px #ffffff;font-weight: bold;" class="animated zoomIn infinite">Already Registered?<a href="login.php" style="color: navy;">Click Here</a></p>
		</div>


		<script type="text/javascript" src="assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.validate.js"></script>
		<script type="text/javascript" src="assets/js/validate.js"></script>
		
		<script>
			$('#log-redirect').hover(function() {
				$(this).removeClass("infinite");
			});
		</script>
		
	</body>
</html>