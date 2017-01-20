<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Applicant;

class ApplicantFormController extends Controller
{
    public function edit(User $user) {
      $user->load('applicant');
      $theme_data = [];
      $jobs = Job::get();
      $theme_data['jobs'] = $jobs;
      $theme_data['user'] = $user;

   	 return view('register.edit', $theme_data);
    }

    public function update(Request $request, User $user) {
      $this->validate($request, [
        'job_id' => 'required',
        'website' => 'url',
      ]);

      $user->load('applicant');
      $user->applicant->update($request->all());
      $user->applicant->job_id = $request->job_id;
      $user->applicant->save();

      return redirect('/applicant/'.$user->id);
    }
}
