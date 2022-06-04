<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard(){
        return view('user-panel.master');
//       return "hi";
}
}
