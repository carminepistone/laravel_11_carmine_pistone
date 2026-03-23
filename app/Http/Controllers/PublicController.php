<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   
public function homepage()
    {
        return view('homepage');
    }


    public function contattaci()
    {
        return view('contattaci');
    }


public function contactUsForm(Request $request){
    $user = $request->input('user');
    $email = $request->input('email');
    $message = $request->input('message');
    $userData = compact('user','email','message');

    try{
    Mail::to($email)->send(new ContactMail($userData));
    }catch(\Exception $e){
        return redirect(route('homepage'))->with('emailError', "C'è stato un problema con l'invio della mail. Riprova più tardi" );
    
    }
    return redirect(route('homepage'))->with('emailSent', 'Hai correttamente inviato il tuo messaggio!' );
    
}


}
