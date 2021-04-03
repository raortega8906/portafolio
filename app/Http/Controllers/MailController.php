<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    //
    public function getMail(Request $request){
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];
        Mail::to('ceiforestudios87@gmail.com')->send(new TestMail($data));
        return back()->with('status', 'Mail enviado con éxito');
    }
}

