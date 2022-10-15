<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    protected $fillable = ['task_name','id','created_at','updated_at','tag_id'];

     public function tag(){
		return $this->belongsTo('App\Models\Tag');
     }
        public function user(){
		return $this->belongsTo('App\Models\User');
}
}