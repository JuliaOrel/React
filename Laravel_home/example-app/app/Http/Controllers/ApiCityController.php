<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICityService;
use Illuminate\Http\Request;

class ApiCityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ICityService $service)
    {
        $params=new RequestParamsPresenter($request);
        $c=$service->index($params);
       return $c;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        $c=new City();
        $c->setAttribute('city', $request->input('city'));
        $c->setAttribute('description', $request->input('description'));
        $c->save();
        return $c;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return City::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, string $id)
    {
       $c=City::find($id);
       $c->setAttribute('city', $request->input('city'));
       $c->setAttribute('description', $request->input('description'));
       $c->save();
       return $c;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::find($id)->delete();
        return [];
    }
}
