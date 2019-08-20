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

  <td><a href="{{ route('order.create') }}">New Book</a></td>

  <table class="table table-striped">
    {{ Session::get('books') }}
    <thead>
      <h1>Book List</h1>
      <tr>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Cantidad de Copias Disponibles</td>
      </tr>
    </thead>
    <td><a href="{{ /add/{{ $book->id) }} ">Agregar a la Orden</a><td>
      <td><form method="post" action="{{ route('order.destroy', $book->id) }}" >
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Borrar">
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
<div>
  @endsection
