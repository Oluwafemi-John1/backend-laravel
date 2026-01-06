<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    $user = "Oluwafemi";
    return view('home', $user);
});
