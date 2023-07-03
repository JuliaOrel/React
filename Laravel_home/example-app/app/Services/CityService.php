<?php

namespace App\Services;
use App\Models\City;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICityService;
use Illuminate\Http\Request;

class CityService implements ICityService
{
    public  function index(RequestParamsPresenter $params)
    {
        return City::paginate($params->perPage);
    }

    public function store(array $data){
        return City::create($data);
    }

    public function show($id){
        $city=new City();
        return $city->find($id);
    }

    public function edit($id)
    {
        return City::findOrFail($id);
    }
    public function update($id, array $data)
    {
        $city = City::findOrFail($id);
        $city->update($data);
        return $city;
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
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
