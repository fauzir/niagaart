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
use Illuminate\Support\Facades\Input;
use Session;
use View;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        if (App::isLocale('en')) {
            $workHours = explode(',', $contact->work_hour);
        } elseif (App::isLocale('id')) {
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
            $message->from('noreply@niagaart.com', 'Your Web Message');
            $message->to('fauzi@41studio.com', 'Admin')->subject('You have a new message!');
        });

        Mail::send('mails.thanks',
            array(
                'name' => $request->input('name')
            ), function($message)
        {
            $message->from('noreply@niagaart.com', 'Niaga Art Admin');
            $message->to(Input::get('email'), Input::get('name'))->subject('Thanks For Your Message!');
        });

      Session::flash('flash_message', 'Your message has been sent, Thank you!');

      return redirect()->route('contact', ['locale' => 'id']);
    }
}
