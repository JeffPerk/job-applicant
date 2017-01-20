<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Skill;
use App\Applicant;

class ApplicantFormController extends Controller
{
    public function edit(User $user) {
      $theme_data = [];
      $user->load('applicant');
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

      $request->skills = ucwords($request->skills);
      $skill_set = explode(',', $request->skills);

      $user->load('applicant');
      foreach ($skill_set as $skill) {
        $new_skill = Skill::create([
          'name' => $skill,
        ]);
        $new_skill->applicant_id = $user->applicant->id;
        $new_skill->save();
      }
      $user->applicant->update($request->all());
      $user->applicant->job_id = $request->job_id;
      $user->applicant->save();

      return redirect('/applicant/'.$user->id);
    }
}
