<!DOCTYPE html>
<html>
<head>
  <title>Editar</title>
</head>
<body>

  <form method="post" action="{{ route('libro.update', $book->id) }}" >
  @csrf
  @method('PATCH')

  {{ csrf_field() }}

 <input type="text" name="title" placeholder="Titulo" value="{{ $book->title }}">
  <br>
  <br>

  <input type="text" name="author" placeholder="Autor" value="{{ $book->author }}">
  <br>
  <br>
 
  <input type="text" name="number_pages" placeholder="Numero de Paginas" value="{{ $book->number_pages }}">
  <br>
  <br>
  
  <input type="text" name="quantity_copies" placeholder="Cantidad de Copias" value=" {{ $book->quantity_copies }} ">
  <br>
  <br>

  <input type="text" name="quantity_copies_available" placeholder="Cantidad de Copias Disponibles" value=" {{ $book->quantity_copies_available }} ">
  <br>
  <br>
  <button>Guardar</button>
  <br>
  <br>
  <button type="reset">Cancelar</button>
</form>

</body>
</html>