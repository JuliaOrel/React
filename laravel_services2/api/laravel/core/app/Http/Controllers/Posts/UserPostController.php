<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserPostController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Log::debug('slug', 'ok');
        $userId = $request->user()->id;
        $userPosts = Post::query()
            ->where('author_id', $userId)
            ->paginate($request->input('perPage', 10));
        return $userPosts;
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
    public function store(CreatePostRequest $request)
    {
        Log::debug('slug', [json_encode( $request->file('img_url'))] );
        $imagePath = null;
        if (! $request->hasFile('img_url')) {
            Log::debug('slug', ['nofile']);
            return 'No files in request';
        }
        $image = $request->file('img_url');
        $imageName = Str::uuid()->toString() . '.' . $image->getClientOriginalExtension();

        // Загружаем изображение в MinIO
            $bucketName = 'storage';
            Storage::disk('minio')->putFileAs($bucketName, $image, $imageName);

            // Формируем путь к изображению в MinIO
            $imagePath ="http://localhost:9000/".$bucketName."/".$imageName;


        // Вставляем данные поста в базу данных
        $p = new Post();
        $p->setAttribute('title', $request->input('title'));
        $p->setAttribute('slug',
            Str::slug($request->input('slug', date('Y-m-d')), '-'));
        $p->setAttribute('author_id', $request->user()->id);
        $p->setAttribute('body', $request->input('body'));
        $p->setAttribute('img_url', $imagePath);

        Log::debug('slug', $p->toArray());
        // тут нужно использовать try - catch - что бы анализировать ошибку
        $p->save();

        return $p;
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
