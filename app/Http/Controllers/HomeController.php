<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin-dashboard.pages.index',[
            'messages'  => Message::orderBy('id','desc')->paginate(1),
            'comments'  => Comment::orderBy('package_id','desc')->get()
        ]);
    }
}
