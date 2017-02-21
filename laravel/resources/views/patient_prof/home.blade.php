<!DOCTYPE html>
<html>
<head>
	<title>Patient profile</title>
</head>
<body>
	
			{{$name}} </br>
		     {{$user->image}}</br></br>
             {{$user->str_address}}</br></br>
             {{$user->city}}</br></br>
             {{$user->district}}</br></br>
             {{$user->state}}</br></br>
             {{$user->country}}</br></br>
             {{$user->gender}}</br></br>
             {{$user->blood_group}}</br></br>
             {{$user->identification_mark}}
             
	
	<img src="{!! '/uploads/'.$user->image !!}" height="100px" width="100px">
</body>
</html>