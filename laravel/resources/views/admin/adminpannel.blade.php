
<a href='/adminpannel'>HOME</a> </br><br/>
@foreach($tables as $table)
    		<a href='/adminpannel/{{$table->Tables_in_caremedico}}' id='{{$table->Tables_in_caremedico}}'>{{ $table->Tables_in_caremedico}}</a>
    		
    		</br><br/>
 @endforeach