@extends('login_master')
@section('body')
		
		

		<div style="width: 26%;margin-left: 37%;margin-right: 37%;padding-top: 50px;">
			<h1><span class="logo-font"><span class="text-default">Care Medico</span></span></h1><br />
			  <div style="color: red; font-size: 1.2em; text-align: center;"> 
			  	<?php if(isset($message)){echo $message;} 
			  		if(isset($email_msg)){echo $email_msg;}
			  		?>
			  </div>
			  <div style="color: green; font-size: 1.2em; text-align: center;"> 
			  <?php if(isset($_GET['reset']) && $_GET['reset'] == 1){ echo 'Password Reset Successfully  Login with new password!!'; }?>
			  </div>
			<div class="widget-container" style="border-radius: 5px;">
				<div class="heading">
					<h3 style="color: rgb(5,150,250);margin: 5px;"><b>Login</b></h3><hr />
					<span style="color: red;"></span>
					
					<div id="list">
						<div class="row">
							<div class="logbtn_div col-md-6">
								<div class="logbtn_toggle logbtn_toggles" id="patient"><img src="{{ asset('images/patient.png')}}"></div><br>
								<span>Patient Login</span>
							</div> 
							<div class="logbtn_div col-md-6">
								<div class="logbtn_toggle logbtn_toggles" id="doctor"><img src="{{ asset('images/doctor.png')}}"></div><br>
								<span>Doctor Login</span>
							</div>
						</div>
					</div>
					<div class="form_div" id="patient_form" style="display: none;padding: 0px 20px;">
						<form action="/login/check" method="POST">
						{{csrf_field()}}
							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Email" required></input>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<input type="password" name="password" class="form-control" placeholder="Password" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<div style="display: none;">
								<input type="text" name="type" value="1">
							</div>
							<div class="form-group">
								&nbsp;<input type="checkbox" name="remember"> &nbsp;Remember Me</input>
							</div>
							<button type="submit" name="submit0" class="btn btn-primary form-control">Login as a Patient</button>
						</form>
						<a href="#" class="logbtn_toggle" id="doctor">Sign In as Doctor</a>
					</div>
					<div class="form_div" id="doctor_form" style="display: none;padding: 0px 20px;">
						<form action="/login/check" method="post">
						{{csrf_field()}}
							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Email" required></input>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<input type="password" name="password" class="form-control" placeholder="Password" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<div style="display: none;">
								<input type="text" name="type" value="2">
							</div>
							<div class="form-group">
								&nbsp;<input type="checkbox" name="remember"> &nbsp;Remember Me</input>
							</div>
							<button type="submit" name="submit0" class="btn btn-primary form-control">Login as a Doctor</button>
						</form>
						<a href="#" class="logbtn_toggle" id="patient">Sign In as Patient</a>
					</div>
				</div>
			</div>
			<p style="font-size: 1.1em;text-align: center;line-height: .7em;"><a href="/login/forgot" style="color: red;">Forgot Password?</a></p>
			<p style="font-size: 1.1em;text-align: center;line-height: .7em;color: purple;">New User?<a href="/signup">Click Here</a></p>
		</div>


		<script type="text/javascript" src="{{asset('assets/plugins/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

		<script type="text/javascript">
			$(".logbtn_toggle").click(function() {
				$("#list, .form_div").hide();
				id = $(this).attr("id") + "_form";
				$("#"+id).show();
			});
		</script>
		
	@stop
