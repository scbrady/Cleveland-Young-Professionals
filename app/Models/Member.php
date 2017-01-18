<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [ 'name', 'email', 'dob', 'sdob', 'sunday_school_id' ];

    protected function sundaySchool() {
        return $this->belongsTo('App\Models\SundaySchool');
    }
}
