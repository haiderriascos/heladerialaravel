<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categorias = [
        [
            'id' => 1,
            'nombre' => 'Helados Tradicionales',
            'descripcion' => 'Sabores clásicos cremosos preparados al estilo de la casa.'
        ],
        [
            'id' => 2,
            'nombre' => 'Copas y Especiales',
            'descripcion' => 'Combinaciones dulces con salsas, frutas y toppings.'
        ],
    ];

    $productos = [
        [
            'id' => 1,
            'categoria_id' => 1,
            'nombre' => 'Fresa',
            'descripcion' => 'Helado artesanal de fresa natural.',
            'precio' => 5000,
            'stock' => 20,
        ],
        [
            'id' => 2,
            'categoria_id' => 1,
            'nombre' => 'Chocolate',
            'descripcion' => 'Helado intenso de cacao.',
            'precio' => 5500,
            'stock' => 15,
        ],
        [
            'id' => 3,
            'categoria_id' => 2,
            'nombre' => 'Copa QUE ICE',
            'descripcion' => 'Dos bolas de helado, salsa dulce y galleta.',
            'precio' => 9500,
            'stock' => 10,
        ],
    ];

    return view('heladeria', [
        'categorias' => $categorias,
        'productos' => $productos,
    ]);
});