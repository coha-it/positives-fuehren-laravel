<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactCtrl extends Controller
{
    //
    public function sendMail(Request $request) {

        // Validate
        $request->validate([
            'email' => 'required'
        ]);

        // Build Mail
        $subject = 'Kontaktformular Online-Kurs '.$request['subject']; // Subject of your email
        $to = 'it@corporate-happiness.de';  //Recipient's or Your E-mail
        
        $msg = '';
        $msg .= 'First Name: ' . $request->fname . "\n";
        $msg .= 'Last Name: ' . $request->lname . "\n";
        $msg .= 'E-Mail: ' . $request->email . "\n";
        $msg .= 'Kontaktformular Online-Kurs: ' . $request->subject . "\n\n\n";
        $msg .= "Text: \n". $request->message;

        // Send Mail
        Mail::raw($msg, function($message) use ($request)
        {
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->subject('Betreff: '. $request->subject ?? '');
            $message->to(env('MAIL_TO_ADDRESS', 'sales@corporate-happiness.de'));
        });

        return 'sent';
    }
}
