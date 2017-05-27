<form method='post' action='/retailer/check'>
{{csrf_field()}}


Reatailer Email <input type="email" name='r_email' ><br/><br/>
Retailer Licence No <input type='text' name='r_licence_no'><br/><br/>
Password <input type="password" name='r_pass'><br/><br/>


<input type='submit' value='submit'> <br/><br/>

<a href='/retailer/signup'>Sign Up </a>

</form>