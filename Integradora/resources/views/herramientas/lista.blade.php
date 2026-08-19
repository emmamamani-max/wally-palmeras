@extends('layouts.base')
@section('title', 'Ferretería El Tornillo')
@section('content')
<h1>Ferretería El Tornillo</h1>
<p>Ferretería El Tornillo es una ferretería de barrio que ofrece herramientas para trabajos de reparación, construcción y mantenimiento.</p>
<p>Hay {{ count($herramientas) }} herramientas en el inventario.</p>
@if (count($herramientas) > 0)
@foreach ($herramientas as $herramienta)
<div><h2>{{ $herramienta->nombre }}</h2><p>Precio: Bs. {{ $herramienta->precio }}</p></div>
@endforeach
@else
<p>No hay herramientas registradas en el inventario.</p>
@endif
<p><strong>Inventario atendido por EMMA MAMANI</strong></p>
<a href="/herramientas/nuevo">Registrar nueva herramienta</a>
@endsection
