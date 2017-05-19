@if(Session::has('ad_email') && Session::has('ad_type') && Session::get('ad_type')==1) 

	{{Session::get('ad_email')}}
	
	<button>Press me</button>
	<a href='/logout'>logout</a>
		
@endif