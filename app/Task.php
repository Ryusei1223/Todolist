<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=[
        "task",
        "due_date",
        "categorys_id"];
    //Categoryに対するリレーション
    public function category(){
        return $this ->belongsTo("App\Category");
    }
}
