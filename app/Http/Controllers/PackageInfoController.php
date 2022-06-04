<?php

namespace App\Http\Controllers;

use App\CategoryInfo;
use App\PackageInfo;
use Illuminate\Http\Request;

class PackageInfoController extends Controller

{
    public function createPackage(){
        return view('admin-dashboard.pages.package.create-package',[
            'categories'        => CategoryInfo::orderBy('id','desc')->get()
        ]);
    }


    protected function PackageValidation($request)
    {
        $this->validate($request, [
            'package_name'        => 'required|min:3|max:20|regex: /^[a-z ,.\'-]+$/i',
            'package_description' => 'required|min:20|max:200',
            'package_deadline' => 'required',
            'package_rdate' => 'required'
         ]);
     }


    public function savePackage(Request $request){
        $this->PackageValidation($request);
        if ($request->file('package_image')){
            $image = $request->file('package_image');
            $imageName = $image->getClientOriginalName();
            $directory  = 'package_image';
            $path = $image->move($directory,$imageName);

            PackageInfo::savePackageInfo($request, $path);
            return back()->with('message','info added');
        }
        else{
            return back()->with('message','info missing');
          }
    }

    public function managePackage(){
        return view('admin-dashboard.pages.package.manage-package',[
            'packages'              => PackageInfo::orderBy('id','desc')->get()
        ]);
    }



    public function editPackage($id)
    {
        return view('admin-dashboard.pages.package.edit-package', [
            'package' => PackageInfo::find($id),
            'categories'=>CategoryInfo::all()
        ]);

    }

    public function deletePackage(Request $request)
    {
        $delete_package = PackageInfo::find($request->id);
        if ($delete_package) {
            unlink($delete_package->package_image);

            $delete_package->delete();
            return redirect('/admin-dashboard/manage-package')->with('message', 'delete Info');

        }
    }


    public function detailsPackage($id){
        return view('admin-dashboard.pages.package.view-package',[
            'package'          => PackageInfo::find($id)
        ]);
    }

    public function changePackageStatus($id){
        $statusFind         =PackageInfo::find($id);

        if($statusFind){
            if ($statusFind->package_status==1){
                $statusFind->package_status=0;
                $statusFind->save();
            }
            else{
                $statusFind->package_status=1;
                $statusFind->save();
            }
            return back()->with('message','success');
        }
        else{
            return back()->with('message','error');
        }
    }


    protected function imageUpload($request){
        $image=$request->file('package_image');
        $imageName=$image->getClientOriginalName();
        $directory='package_image';
        return $image->move($directory,$imageName);//package-image/rakib.jpg
    }


    public function updatePackage(Request $request)
    {
        $updatePackage=PackageInfo::find($request->id);
        if($request->file('package_image')){

            if (file_exists($updatePackage->package_image)){
                unlink($updatePackage->package_image);
            }
            $path = $this->imageUpload($request);
            $updatePackage->package_price       =$request->package_price;
            $updatePackage->package_deadline    =$request->package_deadline;
            $updatePackage->package_rdate       =$request->package_rdate;
            $updatePackage->package_description =$request->package_description;
            $updatePackage->package_image =$path;
            $updatePackage->package_status      =$request->package_status;
            $updatePackage->save();



        }
        else{
            $updatePackage->package_name=$request->package_name;
            $updatePackage->package_price=$request->package_price;
            $updatePackage->package_deadline=$request->package_deadline;
            $updatePackage->package_rdate=$request->package_rdate;
            $updatePackage->package_description=$request->package_description;
            $updatePackage->package_status=$request->package_status;
            $updatePackage->save();
        }

        return redirect('/admin-dashboard/manage-package')->with('message','Update Info');
    }
}
