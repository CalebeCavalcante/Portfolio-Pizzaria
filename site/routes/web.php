<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pedido', function () {
    return view('pedido');
})->name("pedido");

Route::get('/delivery', function () {
    return view('delivery');
})->name("delivery");

Route::get('/loja', function () {
    return view('loja');
})->name("loja");

Route::get('/cardapio', function () {
    return view('cardapio');
})->name("cardapio");

Route::get('/promocoes', function () {
    return view('promocoes');
})->name("promocoes");

Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name("quemsomos");
