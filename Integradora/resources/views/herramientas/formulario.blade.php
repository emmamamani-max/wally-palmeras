@extends('layouts.base')
@section('title', 'Ferretería El Tornillo')
@section('content')
<h1>Ferretería El Tornillo</h1>
@if ($errors->any())
<div><h3>Se encontraron los siguientes errores:</h3><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<form action="/herramientas/nuevo" method="POST">
@csrf
<label for="nombre">Nombre de la herramienta</label>
<input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
<br><br>
<label for="precio">Precio en Bs</label>
<input type="number" id="precio" name="precio" value="{{ old('precio') }}">
<br><br>
<button type="submit">Registrar herramienta</button>
</form>
<br><a href="/herramientas">Volver al inventario</a>
@endsection
