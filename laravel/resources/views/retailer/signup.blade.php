@extends('retailer.master')
@section('body')
      <div style="width: 360px;margin-left: auto;margin-right: auto;padding-top: 20px;">
         <div class="widget-container" style="border-radius: 5px;">
            <div class="heading" style="padding: 0px;">

               <h2 class="text-default" style="font-size: 1.5em;font-weight: bold;font-style: italic;text-decoration: underline;">New Retailer Sign Up</h2>
               <span style="color: #a94442;text-align: center; padding-left: 2vw;">
                   <?php if(isset($error)){echo $error;} ?> 
               </span>
               <form id="signupform" action="/retailer/store" method="POST" enctype = "multipart/form-data" style="padding: 0 20px 0 20px;">
                     {{csrf_field()}}
                  <div>
                        <div class="form-group has-feedback">
                           <input type="text" name="rt_name" class="form-control" placeholder="Retailer Name" required value="{{Request::old('rt_name') }}"></input>
                           <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                           <input type="email" name="rt_email" class="form-control" placeholder="Email Id" required value="{{Request::old('rt_email') }}"></input>
                           <i class="fa fa-envelope form-control-feedback"></i>
                           <span class="email-feedback" style="color: #a94442;text-align: center;"><?php if (isset($e)&& $e == 2) {echo "This email already exists."; } ?></span>
                        </div>
                        <div class="form-group has-feedback">
                           <input type="password" id="password" name="rt_pass" class="form-control" placeholder="Password(minimum 6 characters)" required></input>
                           <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="text" name="licence_no" class="form-control" placeholder="Retailer Licence No." required value="{{Request::old('license_no') }}"></input>
                        </div>
                        <div class="form-group">
                           <p style="text-align: center;">By submitting this form you accept all our <a href="#" style="color: green;">terms and conditions</a></p>
                        </div>
                        <button type="submit" id="submit0" name="submit0" class="btn btn-primary form-control">Register</button>
                  </div>

               </form>
            </div>
         </div>
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