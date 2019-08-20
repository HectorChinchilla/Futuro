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

  <td><a href="{{ route('cliente.create') }}">New Client</a></td>
  <br><br><br>
  <table class="table is-hoverable">
    <thead>
      <h4 class="title is-4">List Clients</h4>
      <tr>
        <td>Codigo</td>
        <td>FullName</td>
        <td>Birthdate</td>
        <td>Is_active</td>
      </tr>
    </thead>
    <tbody>
      @foreach($client as $client)
      <tr>
        <td>{{$client->code}}</td>
        <td>{{$client->fullname}}</td>
        <td>{{$client->birthdate}}</td>
        <td>{{$client->is_active}}</td>

        <td><a href="{{ route('cliente.show', $client->id) }}">Detalle</a></td>
        <td>
          <form method="post" action="{{ route('cliente.destroy', $client->id) }}" >
            @csrf
            @method('DELETE')
            <input class="button is-danger" type="submit" value="Borrar">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
