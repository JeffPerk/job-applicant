<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApplicantController extends Controller
{
    public function show($id) {
      $user = User::find($id);
      $user->load('applicant.job');
      
      return view('applicants.show', compact('user'));
    }
}
