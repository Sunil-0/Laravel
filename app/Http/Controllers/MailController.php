<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

    public function sendEmail(Request $request){
        $to = $request->temail;
        $data = array('name'=>"Sunil");
        Mail::send("mail",$data,function($message){
            $message->to($to, 'sample')->subject("Testing");
            $message->from('ksrsk000@gmail.com',"Sunil");
        });
        echo "email is sent";
    }
}
