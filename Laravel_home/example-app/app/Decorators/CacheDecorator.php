<?php

namespace App\Decorators;

use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICachable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheDecorator implements ICachable
{
    private string $cacheKey;
    private ICachable $service;
    public function __construct(ICachable $service, string $cacheKey)
    {
        $this->service=$service;
        $this->cacheKey=$cacheKey;
    }

    public function index(RequestParamsPresenter $params)
    {
        $cacheKey=$this->cacheKey . $params->page. '.perPage' . $params->perPage;
        $c=Cache::remember($cacheKey, 30, function() use($params){
            return $this->service->index($params);
        });
        return $c;
    }


}
