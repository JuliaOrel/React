<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Posts\UploadFileController;
use App\Http\Controllers\Users\AdminUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});
Route::apiResource('/user/posts', \App\Http\Controllers\Posts\UserPostController::class);
Route::get('/user/posts/{userId}', [\App\Http\Controllers\Posts\UserPostController::class, 'getPostsById'])->name('posts.users');
//Route::post('/user/uploadFiles', [UploadFileController::class, 'saveFile'])->name('upload.files.save.file');
Route::get('admin/users', [AdminUserController::class, 'index'])->name('api.admin.users.index');

//Route for mailing
Route::post('send-mail', [MailController::class, 'sendMail']);

Route::get('/pub/posts/read/',[\App\Http\Controllers\Posts\ReadPostController::class,'index'])->name('post.read.all');
