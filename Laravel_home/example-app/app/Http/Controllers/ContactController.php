<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ContactController extends Controller
{
    #[NoReturn] public function submit(Request $request): void
    {
        dd($request->input('subject'));
    }
}
