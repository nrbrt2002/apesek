<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'location', 'targeted', 'start_date', 'category_id', 'end_date', 'event_pic', 'materials', 'participantes', 'desc',];
    protected $dates = ['start_date', 'end_date', ];
    public function category(){
      return $this->belongsTo('App\Models\category');
    }
}
