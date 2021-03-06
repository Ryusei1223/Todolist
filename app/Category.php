<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{  
    use SoftDeletes;
    protected $fillable=[
      "id",
      "title",
      "deleted_at"
      ];
    //Categoryに対するリレーション
    public function tasks(){
        return $this ->hasMany("App\Task");
    }
    
};