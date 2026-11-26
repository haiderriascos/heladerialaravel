<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $infoHeladeria = [
        'nombre' => 'QUE ICE',
        'administrador' => 'Haider Riascos',
        'ciudad' => 'Tuquerres',
        'edad' => 15,
        'dia_semana' => 'martes',
        'sabor_disponible' => false,
        'logo' => 'img/logo.jpg',
        'direccion' => '#10-25, Barrio El Recreo',
        'telefono' => '+57 (300) 571-7890',
        'whatsapp' => '+57 317 505 4344',
        'correo' => 'queice@gmail.com',
        'horario' => 'Lunes a Domingo de 11:00 a.m. a 9:00 p.m.',
    ];

    $categorias = [
        ['id' => 1, 'nombre' => 'Copas y Especiales'],
        ['id' => 2, 'nombre' => 'Sandwiches y Panes'],
        ['id' => 3, 'nombre' => 'Conos'],
    ];

    $productos = [
        [
            'nombre' => 'Banana split',
            'categoria_id' => 1,
            'imagen' => 'img/banan.jpg',
            'alt' => 'banan split',
            'descripcion' => 'Un clásico irresistible: banano fresco acompañado de tres bolas de helado, crema batida, cerezas, salsa de chocolate y una divertida sombrillita playera.',
            'precio' => '$10.000',
            'mostrar_disponibilidad' => false,
        ],
        [
            'nombre' => 'Sandwich helado',
            'categoria_id' => 2,
            'imagen' => 'img/sandwich.jpg',
            'alt' => 'cono',
            'descripcion' => 'Cremoso gelato de fresa atrapado entre dos galletas artesanalmente horneadas de puro chocolate. Un antojo práctico, crujiente y totalmente delicioso.',
            'precio' => '$5.000',
            'mostrar_disponibilidad' => false,
        ],
        [
            'nombre' => 'Galeto',
            'categoria_id' => 2,
            'imagen' => 'img/galeto.avif',
            'alt' => 'Galeto',
            'descripcion' => 'Un tierno y tibio pan brioche artesanal relleno de tus bolas de helado favoritas, bañado con azúcar impalpable y galleta crujiente. ¡La mezcla perfecta entre frío y caliente!',
            'precio' => '$8.000',
            'mostrar_disponibilidad' => false,
        ],
        [
            'nombre' => 'Cono',
            'categoria_id' => 3,
            'imagen' => 'img/cono.jpg',
            'alt' => 'Cono',
            'descripcion' => 'Deliciosas bolas de helado servidas en barquillos de galleta crocante hecha en casa. Elige tus sabores preferidos: vainilla, fresa, galleta o chocolate.',
            'precio' => '$5.000',
            'mostrar_disponibilidad' => true,
        ],
    ];

    return view('heladeria', compact('infoHeladeria', 'categorias', 'productos'));
});