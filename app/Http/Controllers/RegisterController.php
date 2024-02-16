<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // use this to validate the input(s)
        // https://laravel.com/docs/8.x/validation#quick-writing-the-validation-logic
        // check this to see the available rules
        // https://laravel.com/docs/8.x/validation#available-validation-rules
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|unique:users|min:5|max:25',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:25'
        ]);

        // use this to encrypt the password field
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // or
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // use this to return the success message to the redirected page
        // $request->session()->flash('success', 'Registration successfull! Please login');
        // or use this to simplify the code
        return redirect('login')->with('success', 'Registration successfull! Please login');

        // return redirect('/login');
    }
}
