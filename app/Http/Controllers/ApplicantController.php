<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApplicantController extends Controller
{
    public function show(User $user) {
      $user->load('applicant.job');
      
      return view('applicants.show', compact('user'));
    }
}
