<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Presenters\RequestParamsPresenter;
use App\Services\Interfaces\ICachable;
use App\Services\Interfaces\IPostService;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(protected ICachable $service)
    {}

    /**
     * Display a listing of the resource.
     */

    public function index(Request $request){
        $params=new RequestParamsPresenter($request);
        $p=$this->service->index($params);

        return view('posts.index', [
            'posts'=>$p
        ]);
    }
    //indexNoPages
//    public function index()
//    {
//        //1
////        $p=Post::all()->sortBy('body');
////        $p=Post::all()->filter(function($post){
////            return strpos($post->title, 'Contact')!== false;
////        });
//
//        //2
////        $p=Post::where('title', 'LIKE', '%Contact%')->get()->filter(function ($post){
////            return strpos($post->title, 'us') !== false;
////        });
//
//        //3
////        $p=Post::query()
////            ->where('title', 'LIKE', '%Contact%')
////            ->where('title', 'LIKE', '%us%')
////            ->get();
//
//        //4
//        $builder=Post::query();
//
//        $builder->where('title', 'LIKE', '%Contact%');
//        $builder->where('title', 'LIKE', '%us%');
//        $sql=$builder->toSql();
//        $p=$builder->get();
//        return view('posts.index', [
//            'posts'=>$p,
//            'sql'=>$sql
//        ]);
//    }

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
