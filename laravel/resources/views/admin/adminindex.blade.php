


<form method='post' action='/admin/check'>
{{csrf_field()}}
   Admin Email <input type='text' name="admin_email" > <br/><br/>
   Admin Password <input type='password' name='admin_pass'> <br/><br/>
   <input type='submit' value='Submit' > 

</form>