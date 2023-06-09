<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
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
    public function store(CityRequest $request)
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
    public function edit(int $id)
    {
        $data = $this->service2->edit($id);
        return view('update-city', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $this->service2->update($id, $request->all());

        return redirect()->route('cities')->with('success', 'City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->service2->destroy($id);
        return redirect()->route('cities')->with('success', 'Message was deleted');
    }
}
