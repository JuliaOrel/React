<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $imagePath = null;
        if (! $request->hasFile('img_url')) {
            return 'No files in request';
        }
        $image = $request->file('img_url');
        $imageName = Str::uuid()->toString() . '.' . $image->getClientOriginalExtension();

        // Загружаем изображение в MinIO
            $bucketName = 'storage';
            Storage::disk('minio')->putFileAs($bucketName, $image, $imageName);

            // Формируем путь к изображению в MinIO
            $imagePath = Storage::disk('minio')->url("$bucketName/$imageName");


        // Вставляем данные поста в базу данных
        DB::table('posts')->insert([
            'id' => Str::uuid()->toString(),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'img_url' => $imagePath,
            'author_id' => $request->input('author_id'),
            'slug' => $request->input('slug'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Пост успешно добавлен'], 201);
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
