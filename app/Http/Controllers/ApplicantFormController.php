<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;

class ApplicantFormController extends Controller
{
    public function edit($id) {
       $theme_data = [];

       $jobs = Job::get();
       $theme_data['jobs'] = $jobs;

       $user = User::find($id);
       $theme_data['user'] = $user;

     	 return view('register.edit', $theme_data);
    }
}
