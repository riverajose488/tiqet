<form method="POST" action="{{route('tiqet.update',$tiqet->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="patch">

<label for="categoria">categoria </label>
<input type="text" name="categoria" value="{{$tiqet->categoria}}" >   

<label for="titulo">titulo</label>
<input type="text" name="titulo" value="{{$tiqet->titulo}}" >   

<label for="decripcion">descripcion </label>
<input type="text" name="descripcion" value="{{$tiqet->descripcion}}" >   

<button >Guardar</button>
</form>


<form method="POST" action="{{route('tiqet.destroy',$tiqet->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>

