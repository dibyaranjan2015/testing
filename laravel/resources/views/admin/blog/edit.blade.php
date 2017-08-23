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
							<h2 class="text-center"> <strong>Update Blog</strong></h2>
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
								
							
							<form class="form-horizontal" action="/admin/blog/update" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
							{{csrf_field()}}
							    <div class="form-group has-feedback">
							        <label for="title" class="control-label col-xs-3">Blog Title</label> 
							        <div class="col-xs-9">
									<input type="text" name="title" class="form-control" value="{{$blog_per->subject}}"></input>
									</div>
							    </div>
							    <input type="hidden" name="id" class="form-control" value="{{$blog_per->id}}"></input>
							    <div class="form-group has-feedback">
							        <label for="content" class="control-label col-xs-12">Content</label> 
							        <div class="col-xs-12">
									<textarea class="form-conrol ckeditor" id="editor1" name="content"> <p style="text-indent: 100px;"> <?php echo html_entity_decode($blog_per->message)?></p> </textarea>
									</div>
							    </div>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Update Blog</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</section>   
@stop
@section('scriptend')
<script type="text/javascript" src="{{ asset('/assets/ckeditor/ckeditor.js') }}"></script>  
	<script type="text/javascript" src="{{ asset('/assets/ckeditor/samples/js/sample.js') }}"></script>
<script>
    CKEDITOR.config.contentsCss = [CKEDITOR.basePath + 'contents.css', '{{ asset('/assets/bootstrap/css/bootstrap.css')}}']
    CKEDITOR.replace('editor1'); // or another instance
</script>

@stop