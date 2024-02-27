<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts"; // can be any name, if it is posts(plural of model name) then no need to mentioned the name, laravel auto get the table name
    protected $timestamp = true;
    public $primaryKey = "id"; // can be any name, if it is id then no need to mentioned the field name, laravel auto get the id name
    public function FunctionName() {
        
    }
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}
