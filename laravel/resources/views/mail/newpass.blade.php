@extends('login_master')
@section('body')
		<div style="width: 26%;margin-left: 37%;margin-right: 37%;padding-top: 50px;">
			<h1><span class="logo-font"><span class="text-default">Care Medico</span></span></h1><br />
			<div style="color: red; font-size: 1.2em; text-align: center;"> 
				<?php if(Session::has('error')){echo Session::get('error');}?>
			</div>
			<div class="widget-container" style="border-radius: 5px;">
				<div class="form_div" id="reset_form" style="padding: 0px 20px;">
					<div class="heading">
						<h3 style="color: rgb(5,150,250);margin: 5px;"><b>New Password</b></h3><hr />
						<span style="color: red;"></span>
						<form action="/resetpassword/store" method="post">
						{{csrf_field()}}
							<input type='hidden' name='fa' value='<?php if(isset($id)){echo $id;} ?>'>
							<div class="form-group has-feedback">
								<input type="password" id="password" name="new_pass" class="form-control" placeholder="Password(minimum 6 characters)" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<input type="password" id="password1" name="conf_new_pass" class="form-control" placeholder="Retype Password" required></input>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
							<input type='hidden' name='rl' value='<?php if(isset($link)){echo $link;} ?>'>
							<button type="submit" name="submit0" class="btn btn-primary form-control">Reset Password</button>
						</form>
					<!--a href="#" class="logbtn_toggle" id="patient">Sign In as Patient</a-->
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{asset('assets/plugins/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
@stop