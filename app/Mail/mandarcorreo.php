<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mandarcorreo extends Mailable
{
    use Queueable, SerializesModels;
    
    public $tipo = 'Denuncia';
    public $msg;

    //public function __construct($msg)
    public function __construct()
    {
        //$this->msg = $msg;
    }
    
    public function build()
    {
        return $this->view('emails.message-received');
    }
}
