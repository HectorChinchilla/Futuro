@extends ('layout')

@section('content')



<h4 class="title is-4">Formulario New Client</h4>

<th><a href="{{ route('cliente.index') }}">Volver</a>
  <br>
  <br>
  <div class="field">
    <div class="control">

      <form method="post" action="{{ route('cliente.store')}}" >
        @csrf
        <label>Codigo:</label>
        <input class="input is-rounded-input is-primary is-rounded" type="text" name="code">
        <br>
        <br>
        <label>FullName:</label>
        <input class="input is-primary is-medium solucion input is-rounded" type="text" name="fullname">
        <br>
        <br>
        <label>Birthdate:</label>
        <input class="input is-primary is-rounded" type="date" name="birthdate">
        <br>
        <br>
        <label>Is_active:</label>
        <input class="input is-primary is-rounded" type="number" name="is_active">
        <br>
        <br>
        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <button class="button is-primary is-rounded">
              Save
            </a>
          </p>
          <p class="control">
            <button class="button is-light is-rounded">
              Cancel
            </a>
          </p>
        </div>
        <br>
        <br>
      </form>
    </div>
  </div>

  @endsection
