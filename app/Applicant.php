<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['name', 'email', 'website', 'cover_letter'];

    public function skills() {
     	 return $this->hasMany('App\Skill');
    }

    public function job() {
     	 return $this->belongsTo('App\Job');
    }

    public function user() {
     	 return $this->hasOne('App\User');
    }
}
