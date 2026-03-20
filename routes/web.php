<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $properties = [
        ['id' => 1, 'title' => 'Rustic Cabin', 'price' => 199, 'image' => asset('images/rustic-carbin.jpg')],
        ['id' => 2, 'title' => 'Modern Villa',  'price' => 56,  'image' => asset('images/modern-villa.jpg')],
        ['id' => 3, 'title' => 'Luxury Villa',  'price' => 618, 'image' => asset('images/luxary-villa.jpg')],
    ];

    return view('home', compact('properties'));
})->name('home');

Route::get('/properties/{id}', function ($id) {
    $propertyMap = [
        1 => ['title' => 'Rustic Cabin', 'price' => 199],
        2 => ['title' => 'Modern Villa',  'price' => 56],
        3 => ['title' => 'Luxury Villa',  'price' => 618],
    ];

    $property = $propertyMap[$id] ?? ['title' => 'Property', 'price' => 0];

    return view('properties.show', compact('property', 'id'));
})->name('properties.show');