<form method='post' action='/admin/store'>
 {{csrf_field()}}

   Admin Name <input type='text' name="admin_name" > <br/><br/>
   Admin Password <input type='password' name='admin_pass'> <br/><br/>
   Admin Email <input type='email' name='admin_email'>
   Admin Type <select name='a_type'>
   		<option value=1>mc1</option>
   		<option value=2>mc2</option>
   		<option value=3>mc3</option>
   		<option value=4>mc4</option>
   		<option value=5>mc5</option>
   </select>
   <input type='submit' value='Submit' > 

</form>