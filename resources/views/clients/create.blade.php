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

	<h1>Formulario New Client</h1>
	<th><a href="{{ route('cliente.index') }}">Volver</a>
	<br>
	<br>
<form method="post" action="{{ route('cliente.store')}}" >
	@csrf
	<label>Codigo:</label>
	<input type="text" name="code" value="" placeholder="Codigo">
	<br>
	<br>
	<label>Fullname:</label>
	<input type="text" name="fullname" value="" placeholder="Nombre">
	<br>
	<br>
	<label>Birthdate:</label>
	<input type="date" name="birthdate" value="" placeholder="Birthdate">
	<br>
	<br>
	<label>Is_active:</label>
	<input type="number" name="is_active" value="" placeholder="Estado">
	<br>
	<br>
	<button>Guardar</button>
	<br>
	<br>
	<button type="reset">Cancelar</button>
</form>

@endsection







