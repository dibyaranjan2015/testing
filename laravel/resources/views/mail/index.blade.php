<?php if(isset($message)){echo $message;}?>

<form method='post' action='/login/forgot/send'>
{{csrf_field()}}
	<input type='mail' name='resetmail'>
	<input type='submit' value='Send reset link'>
</form>