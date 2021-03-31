<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();
        
        return $posts;
    }

    public function show($postID)
    {
        $post = $this->postRepository->findById($postID);
        
        return $post;
    }

    public function update($postID)
    {
        $this->postRepository->updateTitle($postID);

        return redirect('/customers/' . $postID);
    }

    public function destroy($postID)
    {
        $this->postRepository->deleteByID($postID);

        return redirect('/');
    }
}
