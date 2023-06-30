<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\City;
class CityController extends Controller
{
    public function submit(CityRequest $request):RedirectResponse
    {

        City::create($request->all());
        return redirect()->route('home')->with('success', 'Message was added' );
    }
}
