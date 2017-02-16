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
							<p style="text-indent: 100px;"> {{$blog_per->message}}</p>
							</br>
			</div>
@stop
		
