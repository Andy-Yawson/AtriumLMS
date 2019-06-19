<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','slug','start','image',
        'published','price','long_desc','short_desc','tutor_id'];

    public function lessons(){
        return $this->belongsToMany('App\Lesson');
    }
}
