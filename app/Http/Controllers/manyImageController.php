<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manyImageController extends Controller
{
    public function addImages(){
        return view('add-images');
    }

    private function imageUpload($image){
        $imageName                          = $image->getClientOriginalName();
        $directory                          = 'new-images/';
        $image->move($directory,$imageName);
        return $directory.$imageName;
    }


    public function newNews(Request $request){
        foreach ($request->event_image as $option) {
            $image                        = $option;
            $path                         = $this->imageUpload($image);
            $list                         =   new ImageLists();
            $list->image_preview          =   $path;
            $list->save();
        }
        return back();
    }

}
