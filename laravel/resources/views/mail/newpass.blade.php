<?php if(isset($error)){echo $error;}?>

<form method='post' action='/resetpassword/store'>
{{csrf_field()}}
   <input type='hidden' name='fa' value='{{$id}}'>	
   New Password : <input type='password' name='new_pass'>
   Confirm Password : <input type='password' name='conf_new_pass'>
   <input type='hidden' name='rl' value='{{$link}}'>
   <input type='submit' value='Reset'>
</form>