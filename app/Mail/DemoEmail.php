<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * This demo object
     * @var   
     * 
     */
    
    public $demo;
    /**
     * Create a new message instance.
     * 
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('storm.breaker.01101100@gmail.com')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with(
                        [
                            'testVarOne'=>'1man',
                            'testVartwo'=>'2man',
                        ]);
    }
}
