<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function index()
    {
        return View::make('contact');
    }

    public function send (Request $request){
        $data = $request->all();

        //La consulta del cliente.-
        Mail::send('public.email.message', $data, function($message) use ($request) {
            //remitente
            $message->from($request->email, $request->name);

            //asunto
            $message->subject($request->subject);

            //receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

        });

        //La replica de la consulta.-
        Mail::send('public.email.message', $data, function($message) use ($request) {
            //receptor
            $message->to($request->email, $request->name);

            //asunto
            $message->subject($request->subject);

            //remitente
            $message->from('no-reply@website_name.com', 'Mundo de Telgopor - Info');

        });
        //dd('Mail Send Successfully');
        return view('public.contact');
    }
}
