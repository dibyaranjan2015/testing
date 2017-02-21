@extends('master')
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
							<h2 class="text-center"> <strong>PROFILE</strong></h2>
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
							
							<form class="form-horizontal" action="/profile/store" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
							{{csrf_field()}}
							    <div class="form-group has-feedback">
							        <label for="text" class="control-label col-xs-3">Name</label> 
							        <div class="col-xs-9">
									<input type="text"  disabled="" name="name" class="form-control" placeholder="Name" required value="{{$user->username}}"></input>
									<i class="fa fa-user form-control-feedback"></i>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="email" class="control-label col-xs-3">Email</label>
							        <div class="col-xs-9">
							            <input type="email" disabled="" name="email" class="form-control" placeholder="Email Id" required value="{{$user->email }}"></input>
										<i class="fa fa-envelope form-control-feedback"></i>
										<span class="email-feedback" style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 2) {echo "This email already exists."; } ?></span>
							        </div>
							    </div>
							    <div class="form-group has-feedback">
							    	<label for="mob" class="control-label col-xs-3">Mobile Number</label>
							    	<div class="col-xs-9">
										<input type="text" name="mob" class="form-control" placeholder="Contact Details" required value="{{$user->mob}}"></input>
										<i class="fa fa-phone form-control-feedback"></i>
										<span style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 3) 
											{echo "This Mobile already exists."; } ?></span>
									</div>
								</div>
								<div class="form-group has-feedback">
							        <label for="gender" class="control-label col-xs-3">Gender</label>
							        <div class="col-xs-9">
							    		<label class="radio-inline">
							    		<input type="radio" name="gender" value="male"> Male</label>
    									<label class="radio-inline">
    									<input type="radio" name="gender" value="female"> Female</label>
    								</div>
    							</div>
								<div class="form-group has-feedback">
									<label for="image" class="control-label col-xs-3">Upload Image:</label>
									<div class="col-xs-9">
										<input type="file" name="image" value="">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="control-label col-xs-3">Country</label>
									<div class="controls control-label col-xs-9">
								        <select id="country" name="country" value="{{Request::old('country') }}"></select>
								    </div>
								</div>
								<div class="form-group has-feedback">
									<label class="control-label col-xs-3">State</label>
									<div class="controls control-label col-xs-9">
								        <select name="state" id="state" value="{{Request::old('state') }}"></select>
								    </div>
								</div>
								<div class="form-group has-feedback">
							        <label for="district" class="control-label col-xs-3">District</label> 
							        <div class="col-xs-9">
									<input type="text" name="district" class="form-control" value="{{Request::old('district') }}" ></input>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="city" class="control-label col-xs-3">City</label> 
							        <div class="col-xs-9">
									<input type="text" name="city" class="form-control" value="{{Request::old('city') }}" ></input>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="landmark" class="control-label col-xs-3">Landmark</label> 
							        <div class="col-xs-9">
									<input type="text" name="landmark" class="form-control" value="{{Request::old('landmark') }}"></input>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="street" class="control-label col-xs-3">Street Address</label> 
							        <div class="col-xs-9">
									<textarea class="form-conrol" name="street" value="{{Request::old('street') }}"></textarea>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="landmark" class="control-label col-xs-3">ZipCode</label> 
							        <div class="col-xs-9">
									<input type="text" name="zipcode" class="form-control" value="{{Request::old('zipcode') }}"></input>
									</div>
							    </div>


    							<div class="form-group has-feedback">
							        <label for="bloodgroup" class="control-label col-xs-3">Blood Group</label>
							        <div class="col-xs-9">
							    		<label class="radio-inline">
							    		<input type="radio" name="bloodgroup" value="A"> A</label>
    									<label class="radio-inline">
    									<input type="radio" name="bloodgroup" value="B"> B</label>
    									<label class="radio-inline">
							    		<input type="radio" name="bloodgroup" value="O"> O</label>
    									<label class="radio-inline">
    									<input type="radio" name="bloodgroup" value="AB"> AB</label>
    								</div>
    							</div>
    							<div class="form-group has-feedback">
							        <label for="rhesusfactor" class="control-label col-xs-3">Rhesus Factor</label>
							        <div class="col-xs-9">
							    		<label class="radio-inline">
							    		<input type="radio" name="rhesusfactor" value="+">Positive</label>
    									<label class="radio-inline">
    									<input type="radio" name="rhesusfactor" value="-">Negative</label>
    								</div>
    							</div>
    							<div class="form-group has-feedback">
							        <label for="identificationmarks" class="control-label col-xs-3">Identification Marks</label> 
							        <div class="col-xs-9">
									<textarea class="form-conrol" name="identificationmarks" value="{{Request::old('identificationmarks') }}"></textarea>
									</div>
							    </div>
							    <div class="form-group has-feedback">
							        <label for="eye" class="control-label col-xs-9" style="text-align: left;">Does the applicant readily suffer from any defect of vision? If so, has it been corrected by suitable spectacles?&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label>
							        <div class="col-xs-3">
							    		<label class="radio-inline">
							    			<input type="radio" name="eye" value="yes">Yes&nbsp;&nbsp;
							    		</label>
							    		<label class="radio-inline">
    										<input type="radio" name="eye" value="no">No
    									</label>
    								</div>
    							</div>
    							<div class="form-group has-feedback">
							        <label for="eye" class="control-label col-xs-9" style="text-align: left;">Can the applicant readily distinguish the pigmentary colors, red and green?&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label>
							        <div class="col-xs-3">
							    		<label class="radio-inline">
							    			<input type="radio" name="eye" value="yes">Yes&nbsp;&nbsp;
							    		</label>
							    		<label class="radio-inline">
    										<input type="radio" name="eye" value="no">No
    									</label>
    								</div>
    							</div>
    							<div class="form-group has-feedback">
							        <label for="eye" class="control-label col-xs-9" style="text-align: left;">In your opinion, is he able to distinguish with his eye sight at a distance of 25 meters in good day amotor car number plate? &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label>
							        <div class="col-xs-3">
							    		<label class="radio-inline">
							    			<input type="radio" name="eye" value="yes">Yes&nbsp;&nbsp;
							    		</label>
							    		<label class="radio-inline">
    										<input type="radio" name="eye" value="no">No
    									</label>
    								</div>
    							</div>
    							

									<p style="text-align: center;">By submitting this form you accept all our <a href="#" style="color: green;">terms and conditions</a></p>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Register</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</section>   
@stop
@section('scriptend')
<script type="text/javascript" src="{{ asset('/assets/js/countries.js') }}"></script>
<script language="javascript">
            populateCountries("country", "state");
</script>
@stop