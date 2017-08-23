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
		<link rel="shortcut icon" href="{{ asset('/images/logo.png')}}">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="{{ asset('/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="{{ asset('/assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="{{ asset('/assets/fonts/fontello/css/fontello.css')}}" rel="stylesheet">

		<!-- Plugins -->
		<link href="{{ asset('/assets/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/plugins/rs-plugin/css/settings.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/css/animations.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/plugins/hover/hover-min.css')}}" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet" >
		<link href="{{ asset('/assets/css/editor.css')}}" rel="stylesheet">
		<style type="text/css">
			.logo1:hover{
				text-decoration:none;
			}
		</style>
		@yield('head')
	</head>
	<body class="no-trans front-page transparent-header  "@yield('bodyclass')>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1231091893635645";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1231091893635645',
		      xfbml      : true,
		      version    : 'v2.8'
		    });
		    FB.AppEvents.logPageView();
		  };
	</script>
	@yield('script')
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<div align="center">
			<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<script>
			  (adsbygoogle = window.adsbygoogle || []).push({
			    google_ad_client: "ca-pub-7374848764874307",
			    enable_page_level_ads: true
			  });
			</script>
			</div>
			<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
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
							<div class="col-md-1">
								<a href="/admin">
									<button type="button" class="btn btn-default">Back</button>
								</a>
							</div>
							<div class="col-md-4 col-md-offset-3" style="margin-left: 25%;">
								<!-- header-left start -->
								<!-- ================ -4>
								<div class="header-center clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<h3><b><a class="logo1" href="/">CARE MEDICO</a> <a class="logo1" href="/admin">ADMIN </a></b></h3>
									</div>
									
								</div>
								<!-- header-left end -->
								<div class="col-md-offset-3 col-md-1" style="margin-left: 25%;">
									<a href="/admin">
										<button type="button" class="btn btn-success">Home</button>
									</a>
								</div>

							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
			@yield('body')


		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/modernizr.js') }}"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		
		

		<!-- Isotope javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/jquery.countTo.js')}}"></script>
		
		<!-- Parallax javascript -->
		<script src="{{ asset('/assets/plugins/jquery.parallax-1.1.3.js')}}"></script>

		<!-- Contact form -->
		<script src="{{ asset('/assets/plugins/jquery.validate.js')}}"></script>

		<!-- Background Video -->
		<script src="{{ asset('/assets/plugins/vide/jquery.vide.js')}}"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="{{ asset('/assets/plugins/jquery.browser.js')}}"></script>
		<script type="text/javascript" src="{{ asset('/assets/plugins/SmoothScroll.js')}}"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="{{ asset('/assets/js/template.js') }}"></script>
	

		@yield('scriptend')
	</body>
</html>