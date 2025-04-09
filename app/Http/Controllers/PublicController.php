<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function about() {
        return view('about');
    }
    public function welcome() {
        $continents = \App\Models\Continent::all();
        return view('welcome', compact('continents'));
    }

    public function contact() {
        return view('contact');
    }

    public function contactStore(Request $req) {
        // dd($req->all());
        $email = $req->input('userEmail');
        $userName = $req->input('userName');
        $message = $req->input('message');

        $contact = compact('email', 'userName', 'message');
        // dd($email, $userName, $message);
        
        Mail::to($email)->send(new ContactMail($contact));
        // dd('ok');

        return redirect(route('welcome'))->with('message', 'Grazie per averci conattato! Controlla la tua casella di posta');
    }

    
}
