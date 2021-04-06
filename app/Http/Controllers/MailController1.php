<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController1 extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail from Surfside Media',
            'body' => 'this is for testing mail using gmail.'
        ];

        Mail::to("storm.breaker.01101100@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
