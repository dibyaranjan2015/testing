@foreach($users as $user)

{{$user}}

@endforeach


<span style="color: red; font-size: 1.2em; margin-left: 5vw;"> <?php if(isset($message)){echo $message;} ?> </span>

{{ asset('images/patient.png')}}