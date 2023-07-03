<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICachable;
use App\Services\Interfaces\ICityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CityController extends Controller
{
    public function __construct(protected ICachable $service)
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $c=City::where('city', 'LIKE', '%Myk%')->get();
//        return view('allcities', [
//            'cities'=>$c
//        ]);
        $params=new RequestParamsPresenter($request);
        $c=$this->service->index($params);

        return view('allcities', [
            'cities'=> $c
        ]);
//        return view ('allcities', [
//            'cities'=>City::all()->sortBy('city')
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
