<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class SocketController
{
    function index(){
        return Inertia::render('Socket');
    }

}
