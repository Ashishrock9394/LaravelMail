<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Get form data
        $name = $request->input('name');
        $email = $request->input('email');
        $sub = $request->input('subject');
        $content = $request->input('message');

        $to = "ashishkumar9394@gmail.com";  // Replace with dynamic recipient if needed

        $msg = "Hello, Myself " . $name . 
            ". My Email id is: " . $email . 
            ". I want to know: " . $content;

        // Send the email using Mailable class
        Mail::to($to)->send(new ContactMail($msg, $sub));

        // Redirect with success message
        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}
