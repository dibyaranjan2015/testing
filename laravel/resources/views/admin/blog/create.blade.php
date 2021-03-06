@extends('admin.master')
@section('head')
<style type="text/css">
.control-label
{
	font-weight:bold;
}
option,select,textarea
{
	font-weight: normal;
	width: 100%;
}
</style>
@stop
@section('body')
<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center"> <strong>New Blog</strong></h2>
							<div class="separator"></div>
							
							
							@if (count($errors) > 0 )
								<div class="alert alert-danger" style="text-align: center;">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>

										@foreach ($errors->all() as $error)
											{{ $error }}</br>
										@endforeach
									</ul>
								</div>
							@endif
								
							
							<form class="form-horizontal" action="/admin/blog/store" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
							{{csrf_field()}}
							    <div class="form-group has-feedback">
							        <label for="landmark" class="control-label col-xs-3">Blog Title</label> 
							        <div class="col-xs-9">
									<input type="text" name="title" class="form-control" value="{{Request::old('title') }}"></input>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="street" class="control-label col-xs-3">Content</label> 
							        <div class="col-xs-9">
									<textarea class="form-conrol" name="content" value="{{Request::old('content') }}"></textarea>
									</div>
							    </div>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Add New Blog</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</section>   
@stop