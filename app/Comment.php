<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PackageInfo;

class Comment extends Model
{
    protected $fillable=[
        'package_id','commentor_id','commentor_name','commentor_email','commentor_comment'
    ];


    public function packageRelationComment(){
        return $this->belongsTo('App\PackageInfo','package_id');
    }
}
