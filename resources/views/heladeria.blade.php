<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>{{ $infoHeladeria['nombre'] }}</title>
</head>
<body>
    <header>
        <h1>{{ $infoHeladeria['nombre'] }}</h1>
        <img src="{{ asset($infoHeladeria['logo']) }}" alt="logo" width="300">
        <p>Administrador: <strong>{{ $infoHeladeria['administrador'] }}</strong> | Ciudad: <strong>{{ $infoHeladeria['ciudad'] }}</strong></p>
    </header>

    <hr>
    <p style="text-align: center;">
        Que Ice es tu lugar favorito para disfrutar de un buen helado. Sabores
        únicos, ingredientes frescos y las mejores promociones, todo en un solo
        lugar. ¡Ven a probarlos!
    </p>
    <hr>

    <section class="Bienvenida">
        @if ($infoHeladeria['edad'] >= 18)
            <h3>¡Bienvenido! Conoce nuestras promociones especiales.</h3>
        @else
            <h3>¡Bienvenido! Descubre nuestros deliciosos sabores.</h3>
        @endif
    </section>

    <hr>

    <section class="promocion">
        <h3>Promoción del Día</h3>
        @if ($infoHeladeria['dia_semana'] == 'martes')
            <p><strong>¡Hoy tenemos 2x1 en conos!</strong></p>
        @else
            <p>Hoy puedes disfrutar de nuestros sabores habituales.</p>
        @endif
    </section>

    <hr>

    <section class="disponibilidad">
        <h3>Disponibilidad</h3>
        @if ($infoHeladeria['sabor_disponible'] == true)
            <p><strong>¡¡El sabor de chocolate está disponible!!</strong></p>
        @else
            <p>“Lo sentimos, el sabor de mora está agotado”</p>
        @endif
    </section>

    <hr>

    <main>
        <div class="tarjetas">
            @foreach ($productos as $producto)
                <article class="tarjeta">
                    <h2>{{ $producto['nombre'] }}</h2>
                    <img src="{{ asset($producto['imagen']) }}" alt="{{ $producto['alt'] }}" width="300">
                    <p>Descripción: {{ $producto['descripcion'] }}</p>
                    <h4>{{ $producto['precio'] }}</h4>

                    @if ($producto['mostrar_disponibilidad'])
                        <div class="disponibilidad-php">
                            @if ($infoHeladeria['sabor_disponible'] == true)
                                <p>¡Este sabor está disponible!</p>
                            @else
                                <p>Lo sentimos, este sabor está agotado.</p>
                            @endif
                        </div>
                    @endif
                </article>
            @endforeach
        </div>
    </main>

    <hr>

    <footer>
        <h3>Heladería {{ $infoHeladeria['nombre'] }} — "¡Qué un helado te eleve a otro mundo!"</h3>
        <p>Dirección: {{ $infoHeladeria['direccion'] }}, {{ $infoHeladeria['ciudad'] }}</p>
        <p>Teléfono: {{ $infoHeladeria['telefono'] }} | Pedidos WhatsApp: {{ $infoHeladeria['whatsapp'] }}</p>
        <p>Correo electrónico: {{ $infoHeladeria['correo'] }}</p>
        <p>Horario: {{ $infoHeladeria['horario'] }}</p>
        <p>¡Pide tus helados a domicilio o visítanos!</p>
    </footer>
</body>
</html>