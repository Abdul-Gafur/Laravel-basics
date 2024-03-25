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


// Regular expression constraints
Route::get('user/{user_id}/{user_name}', function (string $user_id, string $user_name) {
    return view('pizzers', ['user_id' => $user_id, 'user_name' => $user_name]);
})->whereNumber('$user_id')->whereAlpha('$user_name');