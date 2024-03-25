<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzers', function () {
     
    return view('pizzers', ['type' => 'hawawiian', 'base' => 'cheesy crust']);
});

// Route::view('/pizzers', 'pizzers', ['name' => 'Abdul']);