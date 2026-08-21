@extends('layouts.app')

@section('title', 'Contacto | Wally Palmeras')

@section('content')
<section class="section contact-section">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow">HABLEMOS</p>
            <h1>Contáctanos</h1>
            <p>Completa el formulario y cuéntanos cómo podemos ayudarte.</p>
            <div class="contact-info">
                <p><strong>Negocio:</strong> Wally Palmeras</p>
                <p><strong>Atención:</strong> Lunes a sábado, 09:00 – 19:00</p>
            </div>
        </div>

        <form id="contactForm" class="contact-form" method="POST" action="{{ route('contacto.procesar') }}" novalidate>
            @csrf
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" type="text" autocomplete="name" required>

            <label for="email">Correo electrónico</label>
            <input id="email" name="email" type="email" autocomplete="email" required>

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="6" required></textarea>

            <p id="formMessage" class="form-message" role="status" aria-live="polite"></p>
            <button class="btn btn-primary" type="submit">Enviar mensaje</button>
        </form>
    </div>
</section>
@endsection
