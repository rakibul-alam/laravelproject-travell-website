<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PackageInfo;

class CategoryInfo extends Model
{
    protected $fillable=['category_name','category_description','category_status'];



    public function packagerelation(){
        return $this->hasMany('App\PackageInfo');
    }
}
