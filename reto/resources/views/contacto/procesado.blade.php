@extends('layouts.app')

@section('title', 'Mensaje recibido | Wally Palmeras')

@section('content')
<section class="section">
    <div class="container result-card">
        <p class="eyebrow">MENSAJE RECIBIDO</p>
        <h1>Gracias, {{ $nombre }}</h1>
        <p>Recibimos tu mensaje correctamente.</p>
        <p><strong>Correo:</strong> {{ $email }}</p>
        <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
        <a class="btn btn-primary" href="{{ Route('inicio') }}">Volver al inicio</a>
    </div>
</section>
@endsection
