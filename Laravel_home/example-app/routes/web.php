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
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');


//Route::get('/cities', function(){
//    return view('cities');
//})->name('cities');

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form');
Route::get('/contact/all', [\App\Http\Controllers\ContactController::class, 'allData'])->name('contact-data');
Route::get('/contact/all/{id}', [\App\Http\Controllers\ContactController::class, 'showOneMessage'])->name('contact-data-one');
Route::get('/contact/all/{id}/update', [\App\Http\Controllers\ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [\App\Http\Controllers\ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', [\App\Http\Controllers\ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/cities/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('cities-search');
Route::resource('cities', \App\Http\Controllers\CityController::class)->name('index', 'cities');

Route::match(['get', 'post'], '/cities/create', [\App\Http\Controllers\CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [\App\Http\Controllers\CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{id}', [\App\Http\Controllers\ContactController::class, 'show'])->name('city-data-one');


/**
 * Вернуть сразу представление (без контроллера)
 */
Route::get('/pv121', function () {
    return view('pv121');
});

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
