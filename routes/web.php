<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/learn-guide', 'learn-guide')->name('learn-guide');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/blog', function () {return view('blogs');})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    try {
        $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404);
    }
    return view('blog-show', compact('blog'));
})->name('blog.show');


Route::get('learn-guide/{id}', function ($id) {
    try {
        $blog = \App\Models\Guide::where('id', $id)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404);
    }
    return view('learn-guide-show', compact('learn-guide'));
})->name('guide.show');
