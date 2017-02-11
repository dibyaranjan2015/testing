@extends('master')
@section('body')
		<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li> <a href="/blog">Blog </a></li>
						<li class="active"> {{$blog_per->subject}} </li>
					</ol>
				</div>
			</div>
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

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
						</div>
						<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="col-md-10 col-md-ofset-1">
							</br>
							<p style="text-indent: 100px;"> {{$blog_per->message}}</p>
							</br>
						</div>
					</div>
				</div>
			</section>	


@stop