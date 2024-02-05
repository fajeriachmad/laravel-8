<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Show all posts',
            // use ModelName::latest()->get() to sort the data in descending order based on the created_at
            // 'posts' => Post::latest()->get()

            // use ModelName::with(['related_field', 'related_field', ...]) to avoid lazy loading
            // which can minimize the total amount of queries
            // https://laravel.com/docs/8.x/eloquent-relationships#eager-loading
            'posts' => Post::with(['author', 'category'])->latest()->get()
            // "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }

    public function showByCategory(Category $category)
    {
        return view('posts', [
            'title' => "Post by Category : $category->name",
            // 'posts' => $category->posts

            // use $model_name->attribute(if used)->load(['relation_field', 'relation_field', ...]) to perform lazy load
            // which also can minimize the total amount of queries
            // https://laravel.com/docs/8.x/eloquent-relationships#lazy-eager-loading 
            'posts' => $category->posts->load(['category', 'author'])
        ]);
    }

    public function showByAuthor(User $author)
    {
        return view('posts', [
            'title' => "Post by Author : $author->name",
            'posts' => $author->posts->load(['category', 'author'])
        ]);
    }
}
