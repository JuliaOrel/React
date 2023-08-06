<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function saveFile(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Генерируем уникальное имя файла
            $fileName = uniqid() . '_' . $image->getClientOriginalName();

            // Сохраняем изображение на MinIO
            Storage::disk('minio')->put($fileName, file_get_contents($image));

            // Сохраняем ссылку на изображение в базе данных
            $post = new Post();
            $post->img_url = 'http://127.0.0.1:9009//' . $fileName;
            $post->save();

            return response()->json(['message' => 'Изображение успешно загружено.']);
        }

        return response()->json(['message' => 'Ошибка загрузки изображения.'], 400);
    }

}
