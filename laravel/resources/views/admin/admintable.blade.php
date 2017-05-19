<a href='/adminpannel'>HOME</a> <br/><br/>
<div style='text-align: center;color: violet;font-size: 2em;'>{{$table}} </div>

<table cellpadding="3" cellspacing="5" class="db-table">
<tr>


@foreach($columns as $column)
	<td>
		<table>
    		

 			<tbody>
	    		@foreach ($users as $user) 
	              {{$user->$column}}</br>
	             @endforeach
	             <!-- <tr>
                     @foreach ($users as $user) 
	                    <td>{{$user->$column}}</td>
	                 @endforeach
                 </tr> -->
            </tbody> 

            <thead>
            <tr>
                <th>{{ $column}}</th>
            </tr>
 			</thead>
 			
        </table>     
    </td>         
@endforeach
 </tr>




</table>


<!-- @foreach ($users as $user) 
     {{$user->id}}
@endforeach -->

<!-- <thead>
            <tr>
                <td>{{ $column}}</td>
            </tr>
 </thead> -->


<!-- 
 <th>{{ $column}}</th>
    		@foreach ($users as $user) 
              {{$user->$column}}</br>
            


             @endforeach -->