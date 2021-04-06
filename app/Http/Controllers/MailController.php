<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use App\Mail\DemoEmail;
//2
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo two Value';
        $objDemo->sender = 'Medet Kurganbayev';
        $objDemo->receiver = 'Medet Qorganbay';

        Mail::to("storm.breaker.01101100@gmail.com")->send(new DemoEmail($objDemo));
        
        
    }
}
