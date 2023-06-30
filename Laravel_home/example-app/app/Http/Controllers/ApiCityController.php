<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;

class ApiCityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return City::all();
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
