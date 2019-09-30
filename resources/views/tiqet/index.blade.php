<table>
	<tr>
		
		<td>categoria</td>
		<td>titulo</td>
		<td>descripcion</td>
		
	</tr>

	
   @foreach($tiqet as $t)
        
	<tr>
	<tr>
     	<td><a href="{{action('tiqetController@show',$t['id'])}}">{{$t->categoria}}</a></td>
		<td>{{$t->titulo}}</td>
		<td>{{$t->descripcion}}</td>
	</tr>
	</tr>

	@endforeach


</table>



