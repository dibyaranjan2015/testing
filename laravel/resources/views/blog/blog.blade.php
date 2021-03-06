@extends('blog.blog_master')
@section('navbar')
	<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active"> Blog </li>
@stop

		@section('blog_body')
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
@stop
		