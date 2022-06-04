<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Message;
use App\PackageInfo;
use Illuminate\Http\Request;

class PageLinkingController extends Controller
{
    public function index()
    {
        $title= "La-destino-updated -home";
        return view('user-panel.view-pages.index',[
            'packages'      => PackageInfo::OrderBy('id','desc')->get()
        ])->with('title','home');
//        return view('user-panel.view-pages.index')->with('title', 'index');
    }
    public function about(){
        $title = "La-destino-updated  -about";
        return view('user-panel.view-pages.about')->with('title','about');

    }


    public function blogs(){
        return view('user-panel.view-pages.blogs')->with('title','La-destino-updated');
    }


    public function hotels(){
        return view('user-panel.view-pages.hotels')->with('title','La-destino-updated');
    }

    public function contact(){
        return view('user-panel.view-pages.contact')->with('title','La-destino-updated');
    }

    public function packages(){
        return view('user-panel.view-pages.packages',[
            'packages'          => PackageInfo::where('package_status',1)->orderby('id','desc')->get(),
            'comments'          => Comment::orderBy('id','desc')->get()
        ])->with('title','La-destino-updated');
    }

    public function gallery(){
        return view('user-panel.view-pages.gallery')->with('title','La-destino');
    }

     //NEW CONTACT
    public function newContact(Request $request){
//        return view('user-panel.view-pages.contact')->with('title','La-destino-updated');
        Message::create($request->all());
        return back();
    }

    public function searchDestination(Request $request){
        $search              = $request->search;
        $packages=PackageInfo::where('package_name', '=', $search)->get();
        return view('user-panel.view-pages.packages',[
           'packages'       =>$packages,
            'comments'      => Comment::all()
        ]);
    }

}

