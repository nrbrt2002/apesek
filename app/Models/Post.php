<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title' ,'body', 'category_id' ,'post_pic' ,'user_id' ,'status' ,'location',];

    public function user(){
      return $this->belongsTo('App\Models\User');
    }
    public function post_desc(){
      return $this->hasOne('App\Models\post_short_descs');
    }

    public function comments(){
      return $this->hasMany('App\Models\comment');
    }
    public function category(){
      return $this->belongsTo('App\Models\category');
    }
}
