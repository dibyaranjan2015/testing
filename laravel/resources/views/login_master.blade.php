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
		<link href="{{ asset('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="{{ asset('assets/fonts/fontello/css/fontello.css')}}" rel="stylesheet">
		<link href="{{ asset('assets/css/animations.css')}}" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" >
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
				margin: 10px 20px -10px 20px;
				box-shadow: 1px 5px 5px rgba(0, 0, 0, 0.1);
			}
			.logbtn_toggles:hover {
				cursor: pointer;
				box-shadow: 1px 5px 7px rgba(0, 0, 0, 0.5);
			}
		</style>
	</head>

	<body class="no-trans front-page" style="background-image: url({{ asset('images/bg1.jpg')}});background-size: cover;background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
     <div class="header-container">
	
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed head-color clearfix">
					
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<h3><a href="/"><b>CARE MEDICO</b></a></h3>
									</div>
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="hidden-xs collapse navbar-collapse">
												<!-- main-menu -->
												<ul class="nav navbar-nav pull-right">

													<!-- mega-menu start -->													
													<li class="active mega-menu">
														<a href="/">Home</a>
													</li>
													<li class="mega-menu">
														<a href="/">Disease Wiki</a>
													</li>
													<li class="mega-menu" style="margin-right: 50px;">
														<a href="/blog">Blog</a>
													</li>
													<!-- mega-menu end -->
												</ul>
												<!-- main-menu end -->
												<ul class="nav navbar pull-right nav-menu-btn">
													<li>
														<a href="/signup" class="btn radius-50 btn-default-transparent btn-md">Sign Up</a>
													</li>
													<li>
														<a href="/login" class="btn radius-50 btn-default-transparent btn-md">Log In</a>
													</li>
													<!-- mega-menu end -->
												</ul>
											</div>
											<div class="visible-xs">
												<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav pull-right">

													<!-- mega-menu start -->													
													<li class="active mega-menu">
														<a href="/">Home</a>
													</li>
													<li class="mega-menu">
														<a href="/">Disease Wiki</a>
													</li>
													<li class="mega-menu">
														<a href="/blog">Blog</a>
													</li>
													<li class="mega-menu">
														<a href="/signup">Sign Up</a>
													</li>
													<li class="mega-menu">
														<a href="/login">Log In</a>
													</li>
													</ul>
											</div>

										</div>
										</div>

									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
			@yield('body')
			<!-- header-container end -->
		<!-- scrollToTop -->
		<!-- ================ -->
		</body>
</html>
