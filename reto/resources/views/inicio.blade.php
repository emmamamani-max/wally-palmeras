
@section('title', 'Inicio | Wally Palmeras')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="eyebrow">NEGOCIO LOCAL</p>
            <h1>Bienvenido a <span>Wally Palmeras</span></h1>
            <p class="hero-text">Un sitio moderno, claro y adaptable para presentar nuestro negocio, servicios y canales de contacto.</p>
            <div class="actions">
                <a class="btn btn-primary" href="{{ route('contacto') }}">Contáctanos</a>
                <button class="btn btn-secondary" id="scheduleButton" type="button">Ver horarios</button>
            </div>
            <p id="scheduleInfo" class="schedule" hidden>Lunes a sábado: 09:00 – 19:00.</p>
        </div>
        <div class="hero-card" aria-label="Presentación del negocio">
            <div class="palm">🌴</div>
            <h2>Calidad y atención</h2>
            <p>Una experiencia sencilla y agradable para nuestros clientes.</p>
        </div>
    </div>
</section>

<section class="section" id="servicios">
    <div class="container">
        <p class="eyebrow">LO QUE OFRECEMOS</p>
        <h2>Nuestros servicios</h2>
        <div class="cards">
            <article class="card"><div class="icon">⭐</div><h3>Atención personalizada</h3><p>Escuchamos las necesidades del cliente y brindamos una atención cercana.</p></article>
            <article class="card"><div class="icon">🛍️</div><h3>Productos y servicios</h3><p>Presentamos nuestra oferta de forma ordenada, clara y fácil de consultar.</p></article>
            <article class="card"><div class="icon">📱</div><h3>Contacto directo</h3><p>Facilitamos la comunicación mediante un formulario sencillo y validado.</p></article>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2>Sobre Wally Palmeras</h2>
        <p>Este proyecto cumple los requisitos de estructura semántica HTML, CSS externo, diseño responsive, interacción con JavaScript y formulario validado.</p>
    </div>
</section>
@endsection
