<?php

namespace App\Services;

use App\Models\Category;
use App\Presenters\RequestParamsPresenter;
use app\Services\Interfaces\ICategoryService;
use Illuminate\Support\Facades\Cache;

class CategoryService implements ICategoryService
{
    public function index(RequestParamsPresenter $params)
    {
        return Category::paginate($params->perPage);
    }
}
