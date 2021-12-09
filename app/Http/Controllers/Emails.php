<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Casual;
use Illuminate\Support\Facades\Mail;

class Emails extends Controller
{
    public function previewCasual(Request $request){
        return new Casual("subject","ali","testing");
    }

    public function sendCasual(Request $request){
        // dd($request);
        // return new Casual($request->subject, $request->name, $request->email_body);
        $emailtosend= new Casual($request->subject, $request->name, $request->email_body);
        try {
            Mail::to($request->email)->send($emailtosend);
        } catch (\Throwable $th) {
            return "Something went wrong".$th;
        }
        return "Sent!";
    }
}
