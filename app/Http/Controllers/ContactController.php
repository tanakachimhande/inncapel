<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contactUs (Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send an email
        Mail::to('info@inncapel.com')->send(new ContactMail($validatedData));

        // Redirect back with a success message
        return back()->with('message', 'Message was sent successfully!');
    }
}
