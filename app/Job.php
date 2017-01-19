<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = "jobs";

    public function applicant() {
     	 return $this->hasMany('App\Applicant');
    }
}
