<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request):RedirectResponse
    {

        Contact::create($request->all());
        return redirect()->route('home')->with('success', 'Message was added' );
    }
}
