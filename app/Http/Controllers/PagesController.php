<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'min:10',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'
        ]);
        
        $data = array(
            'subject' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mail@jonathanconde.com');
            $message->subject($data['subject']);
                
        });

        Session::flash('success', 'Votre Email a bien été envoyé! Vous aurez une réponse dans les 24 heures.');

        return redirect('contact');
    }
}
