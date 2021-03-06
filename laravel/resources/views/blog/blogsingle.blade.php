@extends('blog.blog_master')
@section('navbar')
	<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li> <a href="/blog">Blog </a></li>
						<li class="active"> {{$blog_per->subject}} </li>
@stop

		@section('blog_body')
			<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"> {{$blog_per->subject}}  </h1>
							<div class="separator-2"></div>

							<div class="masonry-grid row" id='blog'>
								<!-- masonry grid item start -->
								<div class= "col-md-6" style="text-align: left;">
								{{$blog_per->created_at}}
								</div>
								<div class= "col-md-6"  style="text-align: right;">
								- {{$blog_per->name}}
								</div>
							</div>
							</br>
							<p style="text-indent: 100px;"> <?php echo html_entity_decode($blog_per->message)?></p>
							</br>
							<div class="fb-comments" data-href="https://www.facebook.com/caremedicoindia/posts/1478706672204612" data-numposts="2"></div>
							<div class="fb-like" data-href="https://www.facebook.com/caremedicoindia/posts/1478706672204612" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>
@stop
		
