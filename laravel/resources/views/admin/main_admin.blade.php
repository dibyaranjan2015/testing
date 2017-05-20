@extends('admin.master')
@section('head')
<style type="text/css">
	.ph-button {
	
    border-style: solid;
    border-width: 0px 0px 3px;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
    color: #FFFFFF;	   
    border-radius: 6px;
    cursor: pointer;
    display: inline-block;
    font-style: normal;
    overflow: hidden;
    text-align: center;
    text-decoration: none;
    text-overflow: ellipsis;
    transition: all 200ms ease-in-out 0s;
    white-space: nowrap;	
    font-family: "Gotham Rounded A","Gotham Rounded B",Helvetica,Arial,sans-serif;
    font-weight: 700;	
    padding: 9px 39px 8px;
    font-size: 18px;
	
}
.ph-button:hover
{
	color: #000;
	text-decoration: none;
}

/*Red
==========================*/
.ph-btn-red {

    background-color: #ED5A5A !important;
    border-color: #EA4343 !important;

}
.ph-btn-red:hover, .ph-btn-red:focus, .ph-btn-red:active {
    background: none repeat scroll 0 0 #EB4848 !important;
    border-color: #E83131 !important;    
}

.ph-float {
  
  float: left;
  width: 22%;
  padding: 10px;  
  padding-top: 50px;  
  text-align: center;

}

.ph-clear {
  
  clear: both;
   
}



</style>
@stop
@section('body')

@if(Session::has('ad_name') && Session::has('ad_type')) 

<div id="page-start"></div>

			<!-- section start -->
			<!-- ================ -->
			<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">{{ucfirst(Session::get('ad_name'))}}</h2>
							<div class="separator"></div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
								<h3>Blog</h3>
								<div class="separator clearfix"></div>
								<!-- <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a> -->
								<ul style="text-align: left;">
									<li><a href="#">Add Blog</a></li>
									@if(Session::get('ad_type')==1)
									<li><a href="/admin/blog/create">Edit Blog</a></li>
									<li><a href="#">Remove Blog</a></li>
									@endif
								</ul>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
								<h3>Medicine</h3>
								<div class="separator clearfix"></div>
								<!-- <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a> -->
								<ul style="text-align: left;">
									<li><a href="#">Add Medicine</a></li>
									@if(Session::get('ad_type')==1)
									<li><a href="#">Edit Medicine</a></li>
									<li><a href="#">Remove Medicine</a></li>
									@endif
								</ul>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
								<h3>Others</h3>
								<div class="separator clearfix"></div>
								<ul style="text-align: left;">
									<li><a href="#">Change Password</a></li>
									@if(Session::get('ad_type')==1)
									<li><a href="/admin/signup">Add New Member</a></li>
									<li><a href="#">Remove Member</a></li>
									@endif
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-5">
						<div class="ph-float">
							<a href='/admin/logout' class='ph-button ph-btn-red'>Log Out</a>
						</div> 
						</div>
					</div>   
				</div>
			</section>
			<!-- section end -->

		@endif

@stop