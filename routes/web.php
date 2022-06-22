<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', 'App\Http\Controllers\ProductController@index');