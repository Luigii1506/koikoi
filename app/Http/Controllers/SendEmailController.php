<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class SendEmailController extends Controller
{
    function index() {
        return view('contact');
    }

    function send(Request $req) {
       
        $this->validate($req, [
            //'nombre' => 'required',
            'email' => 'required|email',
            //'g-recaptcha-response' => 'required|captcha',
            'mensaje' => 'required'
        ]);

        $objDemo = new \stdClass();
        $objDemo->nombre = $req->nombre;
        $objDemo->mensaje = $req->mensaje;
        $objDemo->sender = $req->email;

       Mail::to("hola@koikoistudio.com")->send(new SendMail($objDemo));
       return view('thanks', ["active" => "thanks"]);
    }
}
