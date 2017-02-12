@extends('master')

		@section('body')

			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active"> Blog </li>
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
							<h1 class="page-title"> Blog </h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<!-- masonry grid start -->
							<!-- ================ -->
							<div class="masonry-grid row" id='blog'>
								<!-- masonry grid item start -->
								@foreach($blogs as $blog)
										<div class="masonry-grid-item col-sm-6">
											<!-- blogpost start -->
											<article class="blogpost shadow light-gray-bg bordered">
												
												<header>
													<h2><a href="/blog/{{$blog->id}}">{{$blog->subject}}</a></h2>
													<div class="post-info">
														<span class="post-date">
															<i class="icon-calendar"></i>
															<!-- <span class="day">12</span> -->
															<span class="month">{{$blog->created_at}}</span>
														</span>
														<span class="submitted"><i class="icon-user-1"></i> by <a href="#">{{$blog->name}}</a></span>
														<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
													</div>
												</header>
												<div class="blogpost-content">
													<p><?php
													    echo substr($blog->message,0,100);
													    ?>.........</p>
												</div>
												<footer class="clearfix">
													<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
													<div class="link pull-right"><i class="icon-link"></i><a href="/blog/{{$blog->id}}">Read More</a></div>
												</footer>
											</article>
											<!-- blogpost end -->								
										</div>
																
								@endforeach
								

							</div>
							<!-- masonry grid end -->
								{{ $blogs->links() }}
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="/">Home</a></li>
											<li class="active"><a href="/blog">Blog</a></li>
											<li><a href="/">Disease Wiki</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
								<!--div class="block clearfix">
									<h3 class="title">Featured Project</h3>
									<div class="separator-2"></div>
									<div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<!--ol class="carousel-indicators">
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<!--div class="carousel-inner" role="listbox">
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
								</div-->
								<!--div class="block clearfix">
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
								</div-->								
								<div class="block clearfix">
									<h3 class="title">Popular Tags</h3>
									<div class="separator-2"></div>
									<!--div class="tags-cloud">
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
									</div-->
								</div>
								<!--div class="block clearfix">
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
								</div-->
								<div class="block clearfix">
									<h3 class="title">Latest News</h3>
									<div class="separator-2"></div>
									<!--div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading<a href="#">CareMedico </a></h6>
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
									</div-->
								</div>
								<!--div class="block clearfix">
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
								</div-->								
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
										<p class="mt-10"><a href="/signup" class="btn btn-animated btn-lg btn-gray-transparent ">SIGN UP<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
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
			@stop
			@section('scriptend')
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
@stop
		
	</body>
</html>