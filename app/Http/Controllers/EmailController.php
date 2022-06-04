<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller
{
//    public function send()
//    {
//        Mail::send(['text'=>'email'],['name', 'Rakibul'],function($message){
//             $message->to('rakibul1295@gmail', 'rakibul')->subject('Test Mail');
//             $message->from('emonk3469@gmail', 'rakibul')->subject('Test Mail');
//
//        });
//    }


      public function home(){
          return view("email.home");
      }
}