<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'short_desc', 'cat_pic', 'desc'];

    public function events(){
        return $this->hasMany('App\Models\events');
      }
}
