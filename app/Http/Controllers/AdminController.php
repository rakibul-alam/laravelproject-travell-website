<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Message;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public  function adminDashboard(){
        return view('admin-dashboard.pages.index',[
            'messages'  => Message::orderBy('id','desc')->paginate(1),
            'comments'  => Comment::orderBy('package_id','desc')->get()
            ]);
//        return "hi";
    }
}
