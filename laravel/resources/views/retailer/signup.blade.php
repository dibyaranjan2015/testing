<form method='post' action='/retailer/store'>
{{csrf_field()}}

Reatailer Name <input type="text" name='rt_name' ><br/><br/>
Reatailer Email <input type="email" name='rt_email' ><br/><br/>
Retailer Licence No <input type='text' name='licence_no'><br/><br/>
Password <input type="password" name='rt_pass'><br/><br/>
Confirm Password <input type='password' name="rt_conf_pass"><br/><br/>

<input type='submit' value='submit'>

</form>