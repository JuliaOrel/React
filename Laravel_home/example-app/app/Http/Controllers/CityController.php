<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICachable;
use App\Services\Interfaces\ICityService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct(protected ICityService $service2, protected ICachable $service)
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
       return view ('cities');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city=$this->service2->store($request->all());
        $city->save();
        return redirect()->route('home')->with('success', 'Message was added' );
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service2->show($id);

        return view('one-city', ['data' => $data]);

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
