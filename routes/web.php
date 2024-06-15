<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'home')->name('home');
Route::view('guide', 'guide')->name('guide');
Route::view('about', 'about')->name('about');
Route::view('blog', 'blogs')->name('blog');
Route::get('blog/{slug}', function ($slug) {
    try {
        $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404);
    }
    return view('blog-show', compact('blog'));
})->name('blog.show');

Route::get('guide/{id}', function ($id) {
    try {
        $guide = \App\Models\Guide::where('id', $id)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404);
    }
    return view('guide-show', compact('guide'));
})->name('guide.show');


//Route::get('learn-guide/{id}', function ($id) {
//    try {
//        $blog = \App\Models\Guide::where('id', $id)->firstOrFail();
//    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
//        abort(404);
//    }
//    return view('learn-guide-show', compact('learn-guide'));
//})->name('guide.show');
