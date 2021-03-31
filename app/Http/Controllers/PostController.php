<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('title')
            ->with('user')
            ->where('id', '>', '90')
            ->get();

        return PostResource::collection($posts);
    }
}
