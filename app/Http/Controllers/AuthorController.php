<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $user)
    {
        return view('authors', [
            "users" => $user
        ]);
    }

    public function show(User $author)
    {
        return view('author', [
            "title" => "Author Posts Page",
            "posts" => $author->posts
        ]);
    }
}
