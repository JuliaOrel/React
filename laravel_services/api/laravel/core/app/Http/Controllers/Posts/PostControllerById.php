<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostControllerById extends Controller
{
    public function getPostsById(string $userId){

        Log::debug('slug', 'ok');
        $userPosts = Post::query()
            ->where('author_id', $userId)
            ->get();
        return $userPosts;
    }

}
