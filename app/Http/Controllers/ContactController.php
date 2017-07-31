<?php

namespace App\Http\Controllers;

use App;
use App\Contact;
use App\Service;
use App\Social;
use App\Mail\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use View;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
            $workHours = explode(',', $contact->work_hour);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
            $workHours = explode(',', $contact->work_hour);
        }
        return view('contact', compact('interiors', 'others', 'servicefooters', 'contact', 'workHours', 'socials'));
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
