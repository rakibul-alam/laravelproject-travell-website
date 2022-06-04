<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //6d30262ece-bf9a3e@inbox.mailtrap.io

    public function basic()
    {
//        Mail::send([], [], function ($message) {
//            $message->from('john@johndoe.com', 'John Doe');
//            $message->to('6d30262ece-bf9a3e@inbox.mailtrap.io', 'Test User');
//
//            $message->subject('Test Email');
////          $message->setBody('Hello');
//            $message->setBody('Hi from laravel');
//        });
//        echo "Mail Sent Successfully";


        Mail::send([], [], function ($message) {
            $message->from('rakibul1295@gmail.com', 'Rakibul Alam');
            $message->to('rakibul1295@gmail.com', 'Demo mail');

            $message->subject('Demo mail');
//          $message->setBody('Hello');
            $message->setBody('Hi from laravel 5.8');
        });
        echo "Mail Sent Successfully";
    }


//    public function htmlMail()
//    {
//
//        $data = array(
//            "name" => 'Rakib'
//        );

//        Mail::send('email.mail', [], function ($message){
//            $message->from('john@johndoe.com', 'John Doe');
//            $message->to('6d30262ece-bf9a3e@inbox.mailtrap.io', 'Test User');
//
//            $message->subject('Test Email');
////          $message->setBody('Hello');
//            $message->setBody('Hi from laravel');
//        });
//        echo "Mail Sent Successfully";
//    }
//
//    public function mailAttachment(){
//        $data = array(
//            "name"=> 'Rakib'
//        );
//        $img = asset('/punlic/upload/Logo.jpg');
//        dd($img);
//        Mail::send('email.mail', $data, function($message) use($img){
//             $message->from('john@johndoe.com', 'John Doe');
//            $message->to('6d30262ece-bf9a3e@inbox.mailtrap.io');
//            $message->subject('Attachment');
//            $message->attach($img);
//        });
//        echo "mail sent successfully";
//
//    }


//    }
}
