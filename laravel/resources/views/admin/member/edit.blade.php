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
							<h2 class="text-center"> <strong>New Member</strong></h2>
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
								
							
							<form class="form-horizontal" action="/admin/member/update" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
							{{csrf_field()}}
							    <div class="form-group has-feedback">
							        <label for="title" class="control-label col-xs-3">Member Name</label> 
							        <div class="col-xs-9">
									<input type="text" name="m_name" class="form-control" value="{{$member_per->m_name}}" disabled></input>
									</div>
							    </div>
							    <input type="hidden" name="id" class="form-control" value="{{$member_per->m_id}}"></input>
							    <div class="form-group has-feedback">
							    <label for="title" class="control-label col-xs-3">Member Type</label>
							    <div class="col-xs-9"> 
			                    	<select name="m_type" class="form-control" required>
			                    	   <option value="1" <?php if($member_per->m_type=="1") echo 'selected="selected"'; ?>>Executive Member</option>
			                    	   <option value="2" <?php if($member_per->m_type=="2") echo 'selected="selected"'; ?>>Team Member</option>
			                    	   <option value="3" <?php if($member_per->m_type=="3") echo 'selected="selected"'; ?>>Company</option>
			                    	   <option value="4" <?php if($member_per->m_type=="4") echo 'selected="selected"'; ?>>Retailer</option>
			                    	</select>
		                        </div>
		                        </div>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Update Member</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</section>   
@stop