<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Required parameters
// Route::get('/pizzers/{pizzer_name}', function (string $pizzer_name) {
     
//     return view('pizzers', ['name' => $pizzer_name, 'base' => 'cheesy crust']);
// });

// Short hand route
Route::view('/pizzers', 'pizzers', ['name' => 'Abdul']);


// Optional parameters
Route::get('/pizzers/{pizzer_name?}', function (string $pizzer_name = null) {
    return view('pizzers', ['name' => $pizzer_name ]);
});