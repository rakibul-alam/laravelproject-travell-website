<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;
use Session;

class Visitor extends Model
{
    protected $fillable = [
        'visitor_name','visitor_email', 'visitor_image', 'visitor_password', 'visitor_contact', 'visitor_address',
    ];

    public static function visitorinfoSave($request, $path, $encryptPass)
    {
        $visitor = new Visitor();
//        $visitor->first_name = $request->first_name;
//        $visitor->last_name = $request->last_name;
        $visitor->visitor_name = $request->visitor_name;
        $visitor->visitor_email = $request->visitor_email;
        $visitor->visitor_image = $path;
        $visitor->visitor_password = $encryptPass;
        $visitor->visitor_contact = $request->visitor_contact;
        $visitor->visitor_address = $request->visitor_address;
//        $visitor->confirm_password = $request->confirm_password ;
        $visitor->save();

//        Session::put('visitorId', $visitor->id);
//        Session::get('visitorName', $visitor->first_name.''. $visitor->last_name);
//
//        $data = $visitor->toArray();
//
//        Mail::send('front.mail.congratulation', $data, function ($message) use ($data){
//            $message->to($data['visitor_email']);
//            $message->subject('Congratulation Mail');
//        });
    }
}