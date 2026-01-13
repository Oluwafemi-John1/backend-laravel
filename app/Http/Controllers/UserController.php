<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homeGuy()
    {
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
    }

    public function register(Request $req)
    {
        $createUser = User::create([
            'name' => $req->full_name,
            'email' => $req->email,
            'password' => $req->password
        ]);

        if ($createUser) {
            // echo "User created successfully";
            return view('home', [
                'status' => true,
                'message' => 'User created successfully'
            ]);
        } else {
            // echo "Error ooooo";
            return view('home', [
                'status' => false,
                'message' => 'Error occurred. Please try again'
            ]);
        }

    }
}
