<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $input=$request->all();
        $validator = Validator::make($input,[
            'message'=>'required',
            'name' => 'string|required',
            'email'=>'required'
        ]);
        if( $validator->fails()) {
           return  redirect()->route('contact')
           ->with('failed','Make sure all paramaters are correct');
        }
        else
        {
            Mail::to("thegameoflife.tg@gmail.com")->send(new ContactMail($request->name,$request->email,$request->message));
            return redirect()->route('contact')
            ->with('success','Message is sent successfully');
        }
    }
}
