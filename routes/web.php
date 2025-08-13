<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear-cache', function() {
    \Artisan::call('key:generate');
    return "Key Generated!";
});
