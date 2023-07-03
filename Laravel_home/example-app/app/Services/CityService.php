<?php

namespace App\Services;
use App\Models\City;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICityService;

class CityService implements ICityService
{
    public  function index(RequestParamsPresenter $params)
    {
        return City::paginate($params->perPage);
    }
//    public function index(RequestParamsPresenter $params)
//    {
//        $cacheKey='allcities.page' . $params->page. '.perPage' . $params->perPage;
//        $c=Cache::remember($cacheKey, 30, function() use($params){
//            return City::paginate($params->perPage);
//        });
//        return $c;
//    }

}
