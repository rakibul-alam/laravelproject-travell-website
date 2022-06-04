<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewContact extends Controller
{
    public function newcontact(){
        return view('user-panel.view-pages.contact')->with('message','message added');
    }
}
