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
        // simple logic for the page title
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All posts' . $title,
            // use ModelName::latest()->get() to sort the data in descending order based on the created_at
            // 'posts' => Post::latest()->get()

            // use ModelName::with(['related_field', 'related_field', ...]) to avoid lazy loading
            // which can minimize the total amount of queries
            // https://laravel.com/docs/8.x/eloquent-relationships#eager-loading
            // 'posts' => Post::with(['author', 'category'])->latest()->get()
            // 'posts' => $posts->get()

            // add search variable to get search parameter from the "view" page
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
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
            'posts' => $category->posts->load('category', 'author')
        ]);
    }

    public function showByAuthor(User $author)
    {
        return view('posts', [
            'title' => "Post by Author : $author->name",
            'posts' => $author->posts->load('category', 'author')
        ]);
    }
}
