<?php

namespace App\Repositories;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        $posts = Post::with('user')
            ->get();

        return PostResource::collection($posts);
    }

    public function findById($postID)
    {
        $post = Post::where('id', $postID)
            ->with('user')
            ->firstOrFail();

        return new PostResource($post);
    }

    public function updateTitle($postID)
    {
        $post = Post::where('id', $postID)->firstOrFail();

        $post->update(request()->only('title'));
    }

    public function deleteByID($postID)
    {
        $post = Post::where('id', $postID)->delete();
    }
}
