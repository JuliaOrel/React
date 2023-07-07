<?php

namespace App\Services;

use App\Models\Post;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\IPostService;
use Illuminate\Support\Facades\Cache;

class PostService implements IPostService
{

    public function index(RequestParamsPresenter $params)
    {
        return Post::with('categories')->paginate($params->perPage);
    }
}
