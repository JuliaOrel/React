<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SocketController;
use App\Mail\MailInfo;
use Illuminate\Support\Facades\Route;
Route::get('/api/laravel/', function(){
    \Illuminate\Support\Facades\Log::debug('test');
    return view ('welcome');
});

Route::get('/api/socket/emit', [SocketController::class, 'emit'])->name('socket.emit');


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
