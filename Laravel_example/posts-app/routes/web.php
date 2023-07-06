<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/posts/search', [\App\Http\Controllers\Post\SearchPostController::class, 'search']);
Route::resource('posts', \App\Http\Controllers\Post\PostController::class);
/**
 * Вернуть сразу представление (без контроллера)
 */
Route::get('/pv121', function () {
    return view('pv121');
});
Route::post('/c/pv121', [\App\Http\Controllers\Pv121Controller::class, 'form']);

/**
 * Прямой маршрут на контроллер
 */

Route::get('/c/pv121', [\App\Http\Controllers\Pv121Controller::class, 'helloController']);





/**
 * Динамический метод - по принципу asp.net - имя контроллера - имя метода
 */
Route::get('/invoke/{controller}/{method}', function ($controller, $method) {
    try {
        $controllerInstance = app()->make("App\Http\Controllers\\{$controller}");
    }
    catch (Exception $e) {
        abort(404);
    }

    if (method_exists($controllerInstance, $method)) {
        return $controllerInstance->$method();
    } else {
        abort(404);
    }
});
