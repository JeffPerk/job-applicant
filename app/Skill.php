<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skills';

    public function applicants() {
     	 return $this->belongsToMany('App\Applicant');
    }
}
