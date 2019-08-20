@extends ('layout')

@section('content')



<h4 class="title is-4">Formulario New Book</h4>

<th><a href="{{ route('libro.index') }}">Volver</a>
  <br>
  <br>
  <div class="field">
    <div class="control">

      <form method="post" action="{{ route('libro.store')}}" >
        @csrf
        <label>Titulo:</label>
        <input class="input is-rounded-input is-primary is-rounded" type="text" name="title">
        <br>
        <br>
        <label>Autor:</label>
        <input class="input is-primary is-medium input is-rounded" type="text" name="author">
        <br>
        <br>
        <label>Numero de Paginas:</label>
        <input class="input is-primary is-rounded" type="text" name="number_pages">
        <br>
        <br>
        <label>Cantidad de Copias:</label>

        <input class="input is-primary is-rounded" type="text" name="quantity_copies">
        <br>
        <br>
        <label>Cantidad de Copias Disponibles:</label>
        <input class="input is-primary input is-medium is-rounded" type="text" name="quantity_copies_available">
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
