<?php

namespace App\Http\Controllers;

use App\ImageLists;
use Illuminate\Http\Request;

class ImageConfigController extends Controller
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


    public function saveImage(Request $request){
        return $request->all();
        foreach ($request->multiple_images as $option) {
            $image                        = $option;
            $path                         = $this->imageUpload($image);
            $list                         =   new ImageLists();
            $list->image_preview          =   $path;
            $list->save();
        }
        return back();
    }
}