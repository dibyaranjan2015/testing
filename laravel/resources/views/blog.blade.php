<?php
	// require_once 'inc/autoload.php';
	
	// $db = new DB();
	// if (isset($_SESSION['id'])) {
	// 	$where = array(
	// 				'usrid' => $_SESSION['id']
	// 			);

	// 	$results = $db->select('caremedico', 'users', $where);
	// 	$row = mysql_fetch_array($results);
	// 	$user_id = $_SESSION['id'];
	// 	$user_name = $row['name'];
	// 	$email = $row['email'];
	// 	#$pic = $row['pro_pic'];
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
		<title>Care Medico</title>
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

		<!-- Plugins -->
		<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="assets/css/animations.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="assets/plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" >
		<link href="assets/css/editor.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header  ">

		<a href="#" class="round-btn postAdd"><i class="fa fa-plus"></i></a>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
	
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header fixed  head-color clearfix">
					
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<h3><a href="index.html"><b>CARE MEDICO</b></a></h3>
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
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav pull-right">

													<!-- mega-menu start -->													
													<li class="mega-menu">
														<a href="/">Home</a>
													</li>
													<li class="mega-menu">
														<a href="/diseasewiki">Disease Wiki</a>
													</li>
													<li class="active mega-menu" style="margin-right: 50px;">
														<a href="/blog">Blog</a>
													</li>
													<!-- mega-menu end -->
												</ul>
												<!-- main-menu end -->
												<?php
													if (!isset($_SESSION['id'])) {
														echo'
															<ul class="nav navbar pull-right nav-menu-btn">
																<li>
																	<a href="/signup" class="btn radius-50 btn-default-transparent btn-md">Sign Up</a>
																</li>
																<li>
																	<a href="/login" class="btn radius-50 btn-default-transparent btn-md">Log In</a>
																</li>
															</ul>
														';
													}else {
														echo '
															<ul class="nav navbar pull-right nav-menu-btn">
																<li class="dropdown">
																	<a href="#" class="round-btn dropdown-toggle" data-toggle="dropdown" style="background-color: #f8f8f8;margin-right:100px;"><img src="'.$pic.'" class="img-circle" style="width: 50px;height: 50px;"></a>
																	<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
																		<li><a href="profile.php">User Profile</a></li>
																		<li><a href="pages/logout.php">Logout</a></li>
																	</ul>
																</li>
															</ul>
														';
													}
												?>
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
			<!-- header-container end -->


			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
						<li class="active">Blog Masonry Right Sidebar</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Blog Masonry Right Sidebar</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<!-- masonry grid start -->
							<!-- ================ -->
							<div class="masonry-grid row">
								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered">
										<div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators bottom margin-clear">
												<li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-blog-post" data-slide-to="1"></li>
												<li data-target="#carousel-blog-post" data-slide-to="2"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<div class="overlay-container">
														<img src="images/blog-1.jpg" alt="">
														<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
													</div>
												</div>
												<div class="item">
													<div class="overlay-container">
														<img src="images/blog-3.jpg" alt="">
														<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
													</div>
												</div>
												<div class="item">
													<div class="overlay-container">
														<img src="images/blog-4.jpg" alt="">
														<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
													</div>
												</div>
											</div>
										</div>
										<header>
											<h2><a href="blog-post.html">Blogpost with slider</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">12</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->								
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered">
										<div class="audio-wrapper">
											<iframe height="166" class="margin-clear" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/106329682&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
										</div>
										<header>
											<h2><a href="blog-post.html">Audio post</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">10</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->									
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<header>
											<h2><a href="blog-post.html">Text Post</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">09</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->									
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<div class="overlay-container">
											<img src="images/blog-2.jpg" alt="">
											<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
										</div>
										<header>
											<h2><a href="blog-post.html">Cute Robot</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">08</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->									
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/v1uyQZNg2vE"></iframe>
										</div>
										<header>
											<h2><a href="blog-post.html">Blogpost with embedded youtube video</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">08</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->									
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<div class="overlay-container">
											<img src="images/blog-3.jpg" alt="">
											<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
										</div>
										<header>
											<h2><a href="blog-post.html">Nunc interdum mi neque</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">07</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<div class="overlay-container">
											<img src="images/blog-4.jpg" alt="">
											<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
										</div>
										<header>
											<h2><a href="blog-post.html">Distinctio magni aut illum</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">06</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6">
									<!-- blogpost start -->
									<article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
										<header>
											<h2><a href="blog-post.html">Voluptatem esse optio explicabo dolore impedit</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">06</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
											<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico.</p>
										</div>
										<footer class="clearfix">
											<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
											<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->
							</div>
							<!-- masonry grid end -->

						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Sidebar menu</h3>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="index.php">Home</a></li>
											<li class="active"><a href="blog.php">Blog</a></li>
											<li><a href="diseasewiki.php">Disease Wiki</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
								<div class="block clearfix">
									<h3 class="title">Featured Project</h3>
									<div class="separator-2"></div>
									<div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="images/portfolio-7.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="images/portfolio-1-2.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="images/portfolio-1-3.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Latest tweets</h3>
									<div class="separator-2"></div>
									<ul class="tweets">
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@CareMedico</a> CareMedico CareMedico  <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
										</li>
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@CareMedico</a> CareMedico <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
										</li>
									</ul>
								</div>								
								<div class="block clearfix">
									<h3 class="title">Popular Tags</h3>
									<div class="separator-2"></div>
									<div class="tags-cloud">
										<div class="tag">
											<a href="#">energy</a>
										</div>
										<div class="tag">
											<a href="#">business</a>
										</div>
										<div class="tag">
											<a href="#">food</a>
										</div>
										<div class="tag">
											<a href="#">fashion</a>
										</div>
										<div class="tag">
											<a href="#">finance</a>
										</div>
										<div class="tag">
											<a href="#">culture</a>
										</div>
										<div class="tag">
											<a href="#">health</a>
										</div>
										<div class="tag">
											<a href="#">sports</a>
										</div>
										<div class="tag">
											<a href="#">life style</a>
										</div>
										<div class="tag">
											<a href="#">books</a>
										</div>
										<div class="tag">
											<a href="#">lorem</a>
										</div>
										<div class="tag">
											<a href="#">ipsum</a>
										</div>
										<div class="tag">
											<a href="#">responsive</a>
										</div>
										<div class="tag">
											<a href="#">style</a>
										</div>
										<div class="tag">
											<a href="#">finance</a>
										</div>
										<div class="tag">
											<a href="#">sports</a>
										</div>
										<div class="tag">
											<a href="#">technology</a>
										</div>
										<div class="tag">
											<a href="#">support</a>
										</div>
										<div class="tag">
											<a href="#">life style</a>
										</div>
										<div class="tag">
											<a href="#">books</a>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Testimonial</h3>
									<div class="separator-2"></div>
									<blockquote class="margin-clear">
										<p>Design is not just what it looks like and feels like. Design is how it works.</p>	
										<footer><cite title="Source Title">Steve Jobs </cite></footer>
									</blockquote>
									<blockquote class="margin-clear">
										<p>CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico CareMedico  CareMedico CareMedico CareMedico </p>
										<footer><cite title="Source Title">Steve Doe </cite></footer>
									</blockquote>
								</div>
								<div class="block clearfix">
									<h3 class="title">Latest News</h3>
									<div class="separator-2"></div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading<ahref="blogpost.html">CareMedico </a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
									</div>
									<div class="text-right space-top">
										<a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>	
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Text Sample</h3>
									<div class="separator-2"></div>
									<p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
								</div>
								<div class="block clearfix">
									<form role="search">
										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Search">
											<i class="fa fa-search form-control-feedback"></i>
										</div>
									</form>
								</div>								
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			
			<!-- footer top start -->
			<!-- ================ -->
			<div class="dark-bg  default-hovered footer-top animated-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8">
										<h2>CareMedico</h2>
										<h2>Waste no more time</h2>
									</div>
									<div class="col-sm-4">
										<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent ">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer top end -->
			<!--
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix ">

				<!-- .footer start -->
				<!-- ================ -->
				</section> -->

			<footer class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-7" style="background-position: 50% 50%;bottom: 0px;">
				<div class="clearfix">
					<div class="col-md-3 col-xs-6 text-center">
						<div class="feature-box">
							<h3><b>Support</b></h3><br />
							<a class="footer-list-link" href="#about"> About Us</a><br>
							<a class="footer-list-link" href="#">Contact Us</a><br>
							<a class="footer-list-link" href="#">FAQ</a><br>
							<a class="footer-list-link" href="#">Feedbacks</a><br>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 text-center">
						<div class="feature-box">
							<h3><b>Let Us Help You</b></h3><br />
							<a class="footer-list-link" <?php if (isset($_SESSION['username'])) {
								echo 'href="profile.php"';
							} else {
								echo 'href="signup.php"';
							}
							 ?> >Your Account</a><br>
							<a class="footer-list-link" href="#">Delivery Speed</a><br>
							<a class="footer-list-link" href="#">Help</a><br>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 text-center">
						<div class="feature-box">
							<h3><b>Resources</b></h3><br />
							<a class="footer-list-link" href="#about">Associated Doctors</a><br>
							<a class="footer-list-link" href="#">Medical Database</a><br>
							<a class="footer-list-link" href="#">Links</a><br>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 text-center">
						<div class="feature-box">
							<h3><b>Support</b></h3><br />
							<a class="footer-list-link" href="https://www.facebook.com/caremedicoindia/">Facebook</a><br>
							<a class="footer-list-link" href="https://www.linkedin.com/company/caremedico">Twitter</a><br>
							<a class="footer-list-link" href="http://caremedico.com/#">Google +</a><br>
							<a class="footer-list-link" href="https://www.linkedin.com/company/caremedico">Linkden</a><br>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- page-wrapper end -->

		<div id="addpost" class="modal fade">
			<div class="modal-content" style="margin-top: 100px;margin-left: auto;margin-right: auto;width: 1000px;">
				<a href="#" class="modal-close"><i class="fa fa-close"></i></a>
				<div class="modal-heading">
					<h2 style="color: #777;">Create new Post</h2>
				</div><hr />
				<div class="modal-body animated fadeIn">
					<div>
						<div class="form-group">
							<input type="text" name="title" class="form-control" maxlength="100" placeholder="Title (Maximum 100 characters)" required></input>
						</div>
						<div class="form-group">
							<input type="text" name="tags" class="form-control" placeholder="Tags" required></input>
						</div>
						<div class="">
							<textarea id="txtEditor"></textarea>
						</div>
						<div style="display: none;">
							<button class="btn btn-primary">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
                       -->


		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="assets/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		
		

		<!-- Isotope javascript -->
		<script type="text/javascript" src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="assets/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="assets/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="assets/plugins/jquery.validate.js"></script>

		<!-- Background Video -->
		<script src="assets/plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="assets/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="assets/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="assets/js/template.js"></script>
		<script type="text/javascript" src="assets/js/format.js"></script>
		
		<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
		

		<script type="text/javascript">
			$(document).ready(function() {
				$('[data-toggle="tooltip"]').tooltip();
				$("#txtEditor").Editor();
			});
			$('.postAdd').click(function() {
				$('#addpost').modal();
			});
			$('.modal-close').click(function() {
				$('#addpost').modal("hide");
			});
		</script>

		
	</body>
</html>