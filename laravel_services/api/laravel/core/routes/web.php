<?php

use App\Http\Controllers\SocketController;
use Illuminate\Support\Facades\Route;
Route::get('/api/laravel/', function(){
    return view ('welcome');
});
Route::get('/socket', [SocketController::class, 'index'])->name('socket.index');
Route::get('/socket/emit', [SocketController::class, 'emit'])->name('socket.emit');
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
