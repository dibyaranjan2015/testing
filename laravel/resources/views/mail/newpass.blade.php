<?php if(Session::has('error')){echo Session::get('error');}?>


<form method='post' action='/resetpassword/store'>
{{csrf_field()}}
   <input type='hidden' name='fa' value='<?php if(isset($id)){echo $id;} ?>'>	
   New Password : <input type='password' name='new_pass'>
   Confirm Password : <input type='password' name='conf_new_pass'>
   <input type='hidden' name='rl' value='<?php if(isset($link)){echo $link;} ?>'>
   <input type='submit' value='Reset'>
</form>