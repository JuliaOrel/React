<?php

namespace App\Services;
use Illuminate\Support\Facades\Redis;
use App\Services\Interfaces\ISocket;
use SocketIO;
class SocketEmitService implements ISocket
{
//    private $redis;
   //private $emitter;
    public function __construct()
    {
        //$this->redis=new \Redis();//::connection('default');
        //$this->redis->connect(env('REDIS_SOCKET_HOST', 'redis.socket'), env('REDIS_SOCKET_PORT', 6379));
        //$this->emitter = new SocketIO\Emitter($this->redis);
    }

    public function emit(string $eventName, string $data)
    {
        //$this->emitter->broadcast->emit($eventName, $data);
    }
}
