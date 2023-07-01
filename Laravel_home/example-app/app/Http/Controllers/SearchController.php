<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $builder = City::query();

        $builder->orderBy($request->input('orderBy', 'id'));

        $search = $request->input('search');

        if($search!= null) {
            $builder->where('city', 'LIKE', '%' . $search . '%');
        }

        $sql = $builder->toSql();
        $p = $builder->get();

        return view('search', [
            'search' => $search,
            'cities' => $p,
            'sql' => $sql
        ]);
    }
}
