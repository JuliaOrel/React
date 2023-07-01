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

    public function allData(){
        $contact=new Contact;
        return view('messages', ['data'=>$contact->orderBy('id', 'asc')->take(3)->get()]);
    }

    public function showOneMessage($id){
        $contact=new Contact;
        return view('one-message', ['data'=>$contact->find($id)]);
    }

    public function updateMessage($id){
        $contact=new Contact;
        return view('update-message', ['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request){
        $contact=Contact::find($id);

        $contact->update($request->all());
        return redirect()->route('contact-data-one', $id)->with('success', 'Message was edited');
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message was deleted');
    }
}
