<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function contactSubmit(Request $request){
        //Mail::send('emails.contactmail', [
        // 'name' => $request->name,
        // 'email' => $request->email,
        // 'phone' => $request->phone,
        // 'message' => $request->message
        // ], function($mail) use($request){
        //     $mail->from(env('MAIL_FROM_ADDRESS', $request->name));
        //     $mail->to('jontyrose19@gmail.com')->subject('Contact us Message');
        // });

       $data = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message
       ];

        Mail::send('emails.contactmail', function ($message) {
            $message->to('jontyrose19@gmail.com', 'me')->subject('Welcome!');
        })->with('data', $data);
        return "Message sent was successfull";
    }
}
