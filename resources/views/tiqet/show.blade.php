<table>
	<tr>
		
		<td>categoria</td>
		<td>titulo</td>
		<td>descripcion</td>
	
	</tr>
        
	<tr>
	<tr>
     	 <td>{{$tiqet->categoria}}</td>
		 <td>{{$tiqet->titulo}}</td>
		 <td>{{$tiqet->descripcion}}</td>
	
	</tr>
	</tr>
</table>


<form method="POST" action="{{route('tiqet.destroy',$tiqet->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>
</form>

<a href="http://tiqet.com/tiqet//edit">Editar</a>


