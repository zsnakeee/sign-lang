<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Blog::with('author:id,first_name')->get()->map(function($blog) {
            return [
                'title' => $blog->title,
                'image' => $blog->image,
                'content' => $blog->content,
                'published_at' => $blog->published_at,
                'author_name' => $blog->author->first_name,
            ];
        });

        return response()->json($blogs);
    }
}
