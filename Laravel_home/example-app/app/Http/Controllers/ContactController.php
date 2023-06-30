<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    #[NoReturn] public function submit(ContactRequest $request): void
    {
//        $validation=$request->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:3|max:500'
//        ]);
    }
}
