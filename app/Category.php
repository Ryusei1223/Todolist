<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
      "title",
      "id"
      ];
    //Categoryに対するリレーション
    public function tasks(){
        return $this ->hasMany("App\Task");
    }
};