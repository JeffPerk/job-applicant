<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
     	 return $this->belongsTo('App\Role');
    }

    public function applicant() {
     	 return $this->belongsTo('App\Applicant');
    }

    public function isRole($roleType) {
     	 if ($roleType === 1) {
     	   return $this->roleType = 'Admin';
     	 }
    }
}
