<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryInfo;
use App\Comment;


class PackageInfo extends Model
{
    protected $fillable=[
        'package_category_id','package_name','package_image','package_price','package_deadline','package_rdate','package_description','package_status'

    ];

     public static function savePackageInfo($request,$path){
        $newPackage=new PackageInfo();
        $newPackage->package_category_id          =$request->package_category_id;
        $newPackage->package_name                 =$request->package_name ;
        $newPackage->package_image                =$path;
        $newPackage->package_price                =$request->package_price ;
        $newPackage->package_deadline             =$request->package_deadline;
        $newPackage->package_rdate                =$request->package_rdate ;
        $newPackage->package_description          =$request->package_description;
        $newPackage->package_status               = $request->package_status;
        $newPackage->save();
     }


    public function categoryrelation(){
        return $this->belongsTo('App\CategoryInfo','package_category_id');
    }



    public function commentRelationPackage(){
        return $this->hasMany('App\Comment');
    }
}
