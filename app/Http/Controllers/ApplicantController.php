<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;

class ApplicantController extends Controller
{
    public function show(User $user) {
      $theme_data = [];
      $user->load('applicant.job');
      $skills = Skill::where('applicant_id', $user->applicant->id)->get();
      $theme_data['user'] = $user;
      $theme_data['skills'] = $skills;
      return view('applicants.show', $theme_data);
    }
}
