<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    $user = "Oluwafemi";
    $students = ['Sharon', 'Temi', 'Taiwo', 'Joel'];

    // // Sending variables to files - with method
    // return view('home')->with('user', $user);

    // Compact method
    // return view('home', compact('students', 'user'));

    // Direct method
    return view('home', [
        'students' => $students,
        'user' => $user
    ]);
});

Route::post('/register', function(Request $req) {
    return $req->full_name;
});
