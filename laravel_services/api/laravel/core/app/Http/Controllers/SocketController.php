<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use SocketIO;

class SocketController extends Controller
{
    function index(){
        return view('Socket');
    }

    function emit() {
        $d = date('Y-m-d H:i:s');
        Log::debug($d);

        //Из этого места в коде мне нужно отправить сообщение на фронт
        $redis = new \Redis(); // Using the Redis extension provided client
        $redis->connect('redis.socket', '6379');
        $emitter = new SocketIO\Emitter($redis);
        $emitter->broadcast->emit('controller_event', $d);

        return $d;
    }
}
