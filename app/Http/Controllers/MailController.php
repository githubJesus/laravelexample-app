<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Controllers\CochesController;
use App\Models\Coche;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        $subject=$request->input('subject');
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::raw($message, function ($message) use ($email, $name, $subject) {
            $message->to($email, $name)->subject($subject);
        });

        // return back()->with('success', 'Correo enviado!');
        $coches = Coche::all();
        return view('inicio')->with('coches',$coches) ;

    }

    public function inicio() {
        return view('correo');
    }

}