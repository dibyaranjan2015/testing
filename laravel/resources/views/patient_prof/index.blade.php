<?php if(isset($error)){echo $error;}?>
<?php if(isset($msg)){echo $msg;}?>

<form method='post' action='/profile' enctype="multipart/form-data"> 
   {{csrf_field()}}

   Name:<input type='text' value='{{$name}}' disabled/></br></br>
   Email:<input type="email" value='{{$email}}' disabled/></br></br>
   Address:<input type="text" name="address"></br></br>
   Upload Image:<input type="file" name="image" value=''> </br></br>
   <input type="submit" value='update'>

</form>