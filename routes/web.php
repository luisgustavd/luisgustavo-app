<?php

use Illuminate\Support\Facades\Route;
/* Adicionando comentários nas rotas */
Route::get('/', function () {
    return view('welcome');
});
