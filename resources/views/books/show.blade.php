@extends('layout')

@section('content')

<dl>
  <dt>Titulo:</dt><dd>{{ $book->title }}</dd>
  <dt>Autor:</dt><dd>{{ $book->author }}</dd>
  <dt>Numero de Paginas:</dt><dd>{{ $book->number_pages }}</d>
    <dt>Cantidad de Copias:</dt><dd>{{ $book->quantity_copies }}</d>
      <dt>Cantidad de Copias Disponibles:</dt><dd>{{ $book->quantity_copies_available }}</d>
      </dl>
      <th><a href="{{ route('libro.index') }}">Atras</a>
        <td><a href="{{ route('libro.edit', $book->id) }}">Editar</a></td>

        <form method="post" action="{{ route('libro.destroy', $book->id) }}" >
          @csrf
          @method('DELETE')
          <input type="submit" value="Borrar">

        </form>

        @endsection
