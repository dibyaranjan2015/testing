@extends('master')
	@section('body')
			<!-- header-container end -->


			<!-- banner start -->
			<!-- ================ -->
			<div class="banner clearfix">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">
					
					<!-- slider revolution start -->
					<!-- ================ -->
					<div class="slider-banner-container">
						<div class="slider-banner-fullscreen">
							<ul class="slides">
								<!-- slide 1 start -->
								<!-- ================ -->
								<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Introduction">
								
								<!-- main image -->
								<img src="{{ asset('/images/banner1.jpg') }}" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
								
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="0">
								</div>

								<!-- LAYER NR. 1 -->
								<div class="tp-caption sfr stl xlarge_white"
									data-x="center"
									data-y="70"
									data-speed="200"
									data-easing="easeOutQuad"
									data-start="2000"
									data-end="3500"
									data-splitin="chars"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-splitout="chars">Welcome to
								</div>
			

								<!-- LAYER NR. 4 -->
								<div class="tp-caption sft fadeout text-center large_white"
									data-x="center"
									data-y="70"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="3700"
									data-end="10000"><span class="logo-font"><span class="text-default">Care Medico</span></span> <br> Providing you all your medical needs
								</div>

								<!-- LAYER NR. 8 -->
								<div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
									data-x="center"
									data-y="170"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="3500"
									data-end="10000"><div class="separator light"></div>
								</div>	

								<!-- LAYER NR. 9 -->
								<div class="tp-caption sft fadeout medium_white text-center"
									data-x="center"
									data-y="210"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="3500"
									data-end="10000"
									data-endspeed="600">Providing for all your medical needs and <br />bringing the world of healthcare at your fingertips.<br />We believe in revolutionizing the medical industry and making it more consumer oriented.
								</div>

								<!-- LAYER NR. 10 -->
								<div class="tp-caption fade fadeout"
									data-x="center"
									data-y="bottom"
									data-voffset="100"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="3000"
									data-end="10000"
									data-endspeed="200">
									<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
								</div>
								</li>
								<!-- slide 1 end -->

								<!-- slide 2 start -->
								<!-- ================ -->
								<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Features">
								
								<!-- main image -->
								<img src="{{ asset('/images/banner2.jpg') }}" alt="slidebg2')}}" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="0">
								</div>

								<!-- LAYER NR. 1 -->
								<div class="tp-caption sfb fadeout large_white"
									data-x="left"
									data-y="70"
									data-speed="500"
									data-start="1000"
									data-easing="easeOutQuad"
									data-end="10000"><span class="logo-font">Care Medico</span> <br> Providing you all your medical needs
								</div>	

								<!-- LAYER NR. 2 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="200" 
									data-speed="500"
									data-start="1300"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> Fast Services.
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="260" 
									data-speed="500"
									data-start="1600"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-check"></i></span> Easy to Use.
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="320" 
									data-speed="500"
									data-start="1900"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-gift"></i></span> Every Medical Facility at your Finger Tips.
								</div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="380" 
									data-speed="500"
									data-start="2200"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-hourglass"></i></span> Extremely Flexible.
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfb fadeout small_white"
									data-x="left"
									data-y="450"
									data-speed="500"
									data-start="2500"
									data-easing="easeOutQuad"
									data-endspeed="600"><a href="#" class="btn btn-default btn-lg btn-animated">Sign In <i class="fa fa-arrow-right"></i></a>
								</div>
								</li>
								<!-- slide 2 end -->
							</ul>
							<div class="tp-bannertimer"></div>
						</div>
					</div>
					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->
			
	
			<div id="page-start"></div>

			<!-- section start -->
			<!-- ================ -->
			<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Core <strong>Features</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">Easier and reliable healthcare facilities on one click.<br />Make quick appointments with the best doctors in your locality with our full fledged healthcare structure.</p>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
								<h3>Facilities</h3>
								<div class="separator clearfix"></div>
								<ul style="text-align: left;">
									<li>Doctors Appointment</li>
									<li>Medicines</li>
									<li>Diagnosis</li>
								</ul>
								<!-- <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
								<h3>Extremely Flexible</h3>
								<div class="separator clearfix"></div>
								<ul style="text-align: left;">
									<li>Easy Appointment</li>
									<li>Easy Appointment Cancelation</li>
									<li>Medicine Home Delivery</li>
								</ul>
								<!-- <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
								<h3>Latest Technologies</h3>
								<div class="separator clearfix"></div>
								<p>Best technology for maintaining your medical history and quick appointments.Quick Booking with our Smart tools and technology</p>
								<!-- <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section default-bg clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8">
										<h1 class="title">Don't Miss Out Our Offers</h1>
										<p>Stay tuned with us to get exciting offers and enjoy your healthy life.</p>
									</div>
									<div class="col-sm-4">
										<br>
										<p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">See Offers<i class="fa fa-arrow-right pl-20"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->
			
			<!-- section start -->
			<!-- ================ -->
			<section class="light-gray-bg pv-20">
			</section>
			<!-- section end -->

			<!-- section -->
			<!-- ================ -->
			<section class="pv-30">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2>Our <strong>Aim</strong></h2>
							<div class="separator-2"></div>
							<p>We aim at reaching even the remote areas of India and promote Digital India.</p>
							<ul class="list-icons">
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check-1"></i> No Queues</li>
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="icon-check-1"></i> No hours of waiting</li>
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="icon-check-1"></i> Medical Awareness</li>
							</ul>
							<a href="page-about.html" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-users-1 pr-10"></i>Learn More</a>
						</div>
						<div class="col-md-6">
							<h2>What We <strong>Offer</strong></h2>
							<div class="separator-2"></div>
							<ul class="list-icons">
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check-1"></i> Online Medical Consultancy.</li>
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="icon-check-1"></i> Offline Medical Consultancy.</li>
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="icon-check-1"></i> Medicines</li>
								<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="icon-check-1"></i> Diagnosis</li>
							</ul>
							<a href="page-about.html" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-users-1 pr-10"></i>Learn More</a>
						</div>
					</div>
				</div>
				<br>
			</section>
			<!-- section end -->

			<!-- section 
			<section class="pv-30 light-gray-bg padding-bottom-clear">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Our <strong>Portfolio</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="owl-carousel carousel">
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-1.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-2.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-3.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-4.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-5.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container">
								<img src="images/portfolio-6.jpg" alt="">
								<div class="overlay-top">
									<div class="text">
										<h3><a href="portfolio-item.html">Project Title</a></h3>
										<p class="small">Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-carousel content-slider">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="testimonial text-center">
										<div class="testimonial-image">
											<img src="images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
										</div>
										<h3>Just Perfect!</h3>
										<div class="separator"></div>
										<div class="testimonial-body">
											<blockquote>
												<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
											</blockquote>
											<div class="testimonial-info-1">- Jane Doe</div>
											<div class="testimonial-info-2">By Company</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="testimonial text-center">
										<div class="testimonial-image">
											<img src="images/testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
										</div>
										<h3>Amazing!</h3>
										<div class="separator"></div>
										<div class="testimonial-body">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
											</blockquote>
											<div class="testimonial-info-1">- Jane Doe</div>
											<div class="testimonial-info-2">By Company</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="clients-container">
							<div class="clients">
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
									<a href="#"><img src="images/client-1.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
									<a href="#"><img src="images/client-2.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
									<a href="#"><img src="images/client-3.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
									<a href="#"><img src="images/client-4.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
									<a href="#"><img src="images/client-5.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
									<a href="#"><img src="images/client-6.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
									<a href="#"><img src="images/client-7.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
									<a href="#"><img src="images/client-8.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			@stop
			@section('scriptend')
				<script type="text/javascript">
					$( "#home" ).addClass( "active" );
				</script>
			@stop
