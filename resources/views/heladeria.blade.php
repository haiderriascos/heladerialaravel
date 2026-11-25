<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladería - Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/heladeria.css') }}">
</head>
<body>
    <header>
        <h1>Heladería</h1>
        <p>Catálogo gestionado con arreglos en Laravel</p>
    </header>

    <section>
        <h2>Categorías</h2>
        <div class="grid">
            @foreach ($categorias as $categoria)
                <div class="card">
                    <h3>{{ $categoria['nombre'] }}</h3>
                    <p>{{ $categoria['descripcion'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <h2>Productos</h2>
        <div class="grid">
            @foreach ($productos as $producto)
                <div class="card">
                    <h3>{{ $producto['nombre'] }}</h3>
                    <p>{{ $producto['descripcion'] }}</p>
                    <p class="precio">${{ number_format($producto['precio'], 0, ',', '.') }}</p>
                    <small>Disponibles: {{ $producto['stock'] }}</small>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>