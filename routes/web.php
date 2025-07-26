<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Shyam"]);
});

Route::get('/products', function () {

    $products = [
        ["name" => "product 1","price" => "100","id" => 1],
        ["name" => "product 2","price" => "200","id" => 2],
        ["name" => "product 3","price" => "300","id" => 3],
    ];
    return view('products.index', ["products" => $products]);
});

Route::get('/products/{id}', function ($id) {

    $products = [
        ["name" => "product 1","price" => "100","id" => 1],
        ["name" => "product 2","price" => "200","id" => 2],
        ["name" => "product 3","price" => "300","id" => 3],
    ];
    return view('products.detail', ["product" => $products[$id-1]]);
});
