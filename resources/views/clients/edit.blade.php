<!DOCTYPE html>
<html>
<head>
  <title>Editar</title>
</head>
<body>

  <form method="post" action="{{ route('cliente.update', $client->id) }}" >
  @csrf
  @method('PATCH')

  {{ csrf_field() }}

 <input type="text" name="code" placeholder="Codigo" value="{{ $client->code }}">
  <br>
  <br>

  <input type="text" name="fullname" placeholder="Nombre" value="{{ $client->fullname }}">
  <br>
  <br>
 
  <input type="text" name="birthdate" placeholder="FechaNacimiento" value="{{ $client->birthdate }}">
  <br>
  <br>
  
  <input type="text" name="is_active" placeholder="Estado" value=" {{ $client->is_active }} ">
  <br>
  <br>
  <button>Guardar</button>
  <br>
  <br>
  <button type="reset">Cancelar</button>
</form>

</body>
</html>