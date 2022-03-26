<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendEmail(){
        /**$details = [
            'title' => 'Mail from Sunil',
            'body' => 'This is for testing mail'
        ];
        
        Mail::to("11912049lpu@gmail.com")->send(new TestMail($details));
        return "Email Sent";**/
        $data = array('name'=>"Sunil");
        Mail::send("mail",$data,function($message){
            $message->to('11912049lpu@gmail.com', 'sample')->subject("Testing");
            $message->from('ksrsk000@gmail.com',"Sunil");
        });
        echo "email is sent";
    }
}
