@extends('layout')

@section('content')

<dl>
  <dt>Codigo:</dt><dd>{{ $client->code }}</dd>
  <dt>Fullname:</dt><dd>{{ $client->fullname }}</dd>
  <dt>Birthdate:</dt><dd>{{ $client->birthdate }}</d>
    <dt>Is_active:</dt><dd>{{ $client->is_active }}</d>
    </dl>
    <th><a href="{{ route('cliente.index') }}">Atras</a>
      <td><a href="{{ route('cliente.edit', $client->id) }}">Editar</a></td>

      <form method="post" action="{{ route('cliente.destroy', $client->id) }}" >
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">

      </form>

      @endsection
