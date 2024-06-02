<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMessage(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('info@inncapel.com') // Replace with your email address
                    ->subject('Contact Form Submission')
                    ->setBody("
                        Name: {$request->name}\n
                        Email: {$request->email}\n
                        Phone: {$request->phone}\n
                        Subject: {$request->subject}\n
                        Message: {$request->message}
                    ", 'text/plain');
        });

        // Redirect back with a success message
        return back()->with('message', 'Thank you for contacting us. We will get back to you soon.');
    }
}
