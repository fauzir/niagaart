<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use View;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    public function sendMessage(Request $request)
    {
        // $data = $request->all();
        // View::make('mails.message')->with('data');
        // Mail::to('fauziiirachman@gmail.com')->send(new Message);

        // use Laravel Mail Driver to send email

        Mail::send('mails.message',
            array(
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'user_message' => $request->input('user_message')
            ), function($message)
        {
            $message->from('fauzi@41studio.com', 'Your Web Message');
            $message->to('fauziiirachman@gmail.com', 'Admin')->subject('You have a new message!');
        });

      return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
