@extends('layout')

@section('content')
<style>
.uper {
  margin-top: 40px;
}
</style>
<div class="uper">
  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
  @endif

  <td><a href="{{ route('libro.create') }}">New Book</a></td>
  <br><br><br>
  <table class="table is-hoverable">
    <thead>
      <h4 class="title is-4">List Books</h4>
      <tr>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Numero de paginas</td>
        <td>Cantidad de Copias</td>
        <td>Cantidad de Copias Disponibles</td>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->number_pages}}</td>
        <td>{{$book->quantity_copies}}</td>
        <td>{{$book->quantity_copies_available}}</td>

        <td><a href="{{ route('libro.show', $book->id) }}">Detalle</a></td>
        <td><form method="post" action="{{ route('libro.destroy', $book->id) }}" >
          @csrf
          @method('DELETE')
          <input class="button is-danger" type="submit" value="Borrar">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  @endsection
