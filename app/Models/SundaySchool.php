<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SundaySchool extends Model
{
    protected $fillable = [ 'name' ];

    protected function members() {
        return $this->hasMany('App\Models\Member');
    }
}
