<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_short_descs extends Model
{
    protected $fillable =['short_desc' ,'short_pic' ,'post_id'];
    use HasFactory;
    public function post(){
      return $this->belongTo('App\Models\Post');
    }
}
