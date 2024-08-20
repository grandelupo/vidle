<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new ContactMail(
                name: $request->name,
                email: $request->email,
                message: $request->message,
            ));

        // send payload with response
        return response()->json([
            'message' => 'Dziękujemy! Wiadomość została wysłana.',
            'action' => 'success',
        ]);
    }
}
