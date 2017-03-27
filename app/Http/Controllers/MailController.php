<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class MailCOntroller extends Controller
{
    public function send(Request $request)
    {
        $data['email'] = $request->input('email');
        $data['content'] = $request->input('content');
        Mail::send('emails.contoh', $data, function ($message) use ($data)
                   {
                       $message->to($data['email']);
                       $message->subject('coba-coba');
                   });
        return back();
    }
}
