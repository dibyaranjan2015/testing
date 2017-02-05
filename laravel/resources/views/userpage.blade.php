

@if(Session::has('name')) 
	{{Session::get('name')}}

		<a href='blog/create'> Blog </a>

		<a href ='/logout'>Logout</a>
@endif