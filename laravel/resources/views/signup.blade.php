@extends('login_master')
@section('body')
		<div style="width: 360px;margin-left: auto;margin-right: auto;padding-top: 20px;">
			<h1><span class="logo-font"><span class="text-default">Care Medico</span></span> </h1>
			<div class="widget-container" style="border-radius: 5px;">
				<div class="heading" style="padding: 0px;">

					<h2 class="text-default" style="font-size: 1.5em;font-weight: bold;font-style: italic;text-decoration: underline;">Sign Up</h2>
					<span style="color: #a94442;text-align: center; padding-left: 2vw;">
						 <?php if(isset($error)){echo $error;} ?> 
					</span>
					<form id="signupform" action="/signup/store" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
							{{csrf_field()}}
						<div>
								<div class="form-group has-feedback">
									<input type="text" name="name" class="form-control" placeholder="Name" required value="{{Request::old('name') }}"></input>
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<input type="email" name="email" class="form-control" placeholder="Email Id" required value="{{Request::old('email') }}"></input>
									<i class="fa fa-envelope form-control-feedback"></i>
									<span class="email-feedback" style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 2) {echo "This email already exists."; } ?></span>
								</div>
								<div class="form-group has-feedback">
									<input type="text" name="mob" class="form-control" placeholder="Contact Details" required value="{{Request::old('mob') }}"></input>
									<i class="fa fa-phone form-control-feedback"></i>
									<span style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 3) {echo "This Mobile already exists."; } ?></span>
								</div>
								<div class="form-group has-feedback">
									<input type="password" id="password" name="password" class="form-control" placeholder="Password(minimum 6 characters)" required></input>
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<input type="password" id="password1" name="password1" class="form-control" placeholder="Retype Password" required></input>
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<select name="acctype" class="form-control" required>
										<option value="0" disabled>Register as</option>
										<option value="1">Patient</option>
										<option value="2">Doctor</option>
										<!-- <option value="2">Doctor</option> -->
									</select>
								</div>
								<div class="form-group">
									<p style="text-align: center;">By submitting this form you accept all our <a href="#" style="color: green;">terms and conditions</a></p>
								</div>
								<button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Register</button>
						</div>

					</form>
				</div>
			</div>
			<p id="log-redirect" style="font-size: 1.3em;text-align: center;line-height: 1em;color: green;text-shadow: 1px 1px #ffffff;font-weight: bold;" class="animated zoomIn infinite">Already Registered?<a href="/login" style="color: navy;">Click Here</a></p>
		</div>


		<script type="text/javascript" src="{{ asset('assets/plugins/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('assets/plugins/jquery.validate.js')}}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/validate.js')}}"></script>
		
		<script>
			$('#log-redirect').hover(function() {
				$(this).removeClass("infinite");
			});
		</script>
	@stop