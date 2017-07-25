<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Service;
use App\Mail\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use View;

class ContactController extends Controller
{
    public function index()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->get();
        $contact = Contact::find(1);
        $workHours = explode(',', $contact->work_hour);
        return view('contact', compact('interiors', 'others', 'contact', 'workHours'));
    }

    public function sendMessage(Request $request)
    {
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
