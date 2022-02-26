<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $fillable=[
        "task",
        "due_date",
        "categories_id",
        "deleted_at"
        ];
    //Categoryに対するリレーション
    public function category(){
        return $this ->belongsTo("App\Category");
    }
    
}
