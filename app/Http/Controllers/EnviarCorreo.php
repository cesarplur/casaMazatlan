<?php

namespace App\Http\Controllers;

use app\Mail\mandarcorreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarCorreo extends Controller
{
   
    public function store(){
        $message = request();
        //return request('seleccion', 'denuncia');
        Mail::to('cesarplur@hotmail.com')->send(new \App\Mail\mandarcorreo());
        //Mail::to('cesarplur@hotmail.com')->send(new \App\Mail\mandarcorreo($message));
        return 'Mensaje enviado';
    }
}
