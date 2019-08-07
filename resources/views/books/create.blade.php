@extends ('layout')

@section('content')

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif

 <h4 class="title is-4">Formulario New Book</h4> 

<th><a href="{{ route('libro.index') }}">Volver</a>
<br>
<br>
<div class="field">
  <div class="control">

<form method="post" action="{{ route('libro.store')}}" >
	@csrf
	<label>Titulo:</label>
	<input class="input is-rounded-input is-primary" type="text" name="title">
	<br>
	<br>
	<label>Autor:</label>
	<input class="input is-primary is-medium input" type="text" name="author">
	<br>
	<br>
	<label>Numero de Paginas:</label>
	<input class="input is-primary" type="text" name="number_pages">
	<br>
	<br>
	<label>Cantidad de Copias:</label>
    
	<input class="input is-primary" type="text" name="quantity_copies">
	<br>
	<br>
	<label>Cantidad de Copias Disponibles:</label>
	<input class="input is-primary input is-medium" type="text" name="quantity_copies_available">
	<br>
	<br>
	<div class="field is-grouped is-grouped-centered">
  <p class="control">
    <a class="button is-primary">
      Submit
    </a>
  </p>
  <p class="control">
    <a  class="button is-light">
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