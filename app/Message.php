<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'user_name','user_email','user_subject','user_message',
    ];

    public static function saveUserMessage($request){
        $newmessage=new Message();
        $newmessage->user_name                 =$request->user_name ;
        $newmessage->user_email                =$request->user_email ;
        $newmessage->user_subject                 =$request->user_subject ;
        $newmessage->user_message                 =$request->user_message ;
    }
}
