<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\User;
use App\Skill;
use App\Job;
use Auth;

class AdminController extends Controller
{
    public function index() {
       $theme_data = [];
       $new_admin = "<li><a href='/new-admin'>New Admin</a></li>";
       $theme_data['new_admin'] = $new_admin;
       $applicants = Applicant::get();
       foreach ($applicants as $applicant) {
         $applicant->load('job');
         $applicant->jobName = $applicant->job->name;
         $applicant->skills = Skill::where('applicant_id', $applicant->id)->get();
       }
       $theme_data['applicants'] = $applicants;
      //  $jobs = Job::get();
      //  $theme_data['jobs'] = $jobs;

     	 return view('admin.index', $theme_data);
    }

    public function create() {
       $new_admin = "<li><a href='/new-admin'>New Admin</a></li>";
     	 return view('admin.create', compact('new_admin'));
    }

    public function store(Request $request) {
     	 $user = User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => bcrypt($request->password)
       ]);
       $user->role_id = 1;
       $user->save();

       return redirect('/admin');
    }
}
