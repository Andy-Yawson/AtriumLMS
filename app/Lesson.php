<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'course_id', 'slug','image', 'short_text','long_text',
        'video','position','files','published'
    ];

    public function course(){
        return $this->belongsTo('App\Course','course_id');
    }
}
