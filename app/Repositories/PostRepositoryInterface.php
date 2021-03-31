<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    public function all();

    public function findById($postID);

    public function updateTitle($postID);

    public function deleteByID($postID);
}
