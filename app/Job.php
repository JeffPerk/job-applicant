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

    protected $fillable = ['name'];

    public function applicant() {
     	 return $this->hasMany('App\Applicant');
    }
}
