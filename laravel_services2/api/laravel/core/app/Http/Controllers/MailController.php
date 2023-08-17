<?php

namespace App\Http\Controllers;

use App\Mail\MailInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        // Здесь вы можете добавить дополнительную логику, например, валидацию данных

        // Отправка письма
        Mail::to('test-42qefqqeq@srv1.mail-tester.com')->send(new MailInfo());

        return response()->json(['message' => 'Письмо успешно отправлено']);
    }
}
