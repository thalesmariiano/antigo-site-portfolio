<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{

    private $name;
    private $email;
    private $topic;
    private $message;

    public function __construct(Request $request){
        $this->name = $request->name;
        $this->email = $request->email;
        $this->topic = $request->topic;
        $this->message = $request->message;
    }

    public function sendMail(){

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'topic' => $this->topic,
            'message' => $this->message
        );

        Mail::to( config('mail.from.address') )
            ->send( new SendMail($data) );
        
    }
}
