<form method="POST" action="{{route('tiqet.store')}}">
{{csrf_field()}}

<label for="categoria">categoria </label>
<input type="text" name="categoria" >   

<label for="titulo">titulo</label>
<input type="text" name="titulo" >   

<label for="decripcion">descripcion </label>
<input type="text" name="descripcion" >   

<button >Guardar</button>
</form>