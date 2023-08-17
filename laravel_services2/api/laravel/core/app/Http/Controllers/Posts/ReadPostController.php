<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReadPostController extends Controller
{
    public function index(Request $request){
        $userPosts = Post::query()
            ->with('author')
            ->paginate($request->input('perPage', 10));

        return $userPosts;
    }

}
