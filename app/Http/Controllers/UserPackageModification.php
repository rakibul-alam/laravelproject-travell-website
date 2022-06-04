<?php

namespace App\Http\Controllers;

use App\CategoryInfo;
use App\PackageInfo;
use Illuminate\Http\Request;
use App\Comment;

class UserPackageModification extends Controller
{
    public function visitorPackageModi(){
        return view('user-panel.package-customize.add-package',[
            'categories'        => CategoryInfo::all()
        ]);
    }

    protected function imageUpload($request){
        $image=$request->file('package_image');
        $imageName=$image->getClientOriginalName();
        $directory='package_image';
        return $image->move($directory,$imageName);//package-image/rakib.jpg
    }


    public function visitorPackageModiPost(Request $request){
        if ($request->file('package_image')){
            $path = $this->imageUpload($request);
            PackageInfo::savePackageInfo($request,$path);
        }
        else{
            return back()->with('message',error);
        }
    }


    public function visitorSaveComment(Request $request){
        Comment::create($request->all());
        return back();
    }
}
