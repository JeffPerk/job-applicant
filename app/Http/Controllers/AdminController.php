<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Job;

class AdminController extends Controller
{
    public function index() {
       $theme_data = [];
       $applicants = Applicant::get();
       foreach ($applicants as $applicant) {
         $applicant->load('job');
         dd($applicant);
         $applicant->jobName = $applicant->job->name;
       }
       $theme_data['applicants'] = $applicants;

       $jobs = Job::get();
       $theme_data['jobs'] = $jobs;

     	 return view('admin.index', $theme_data);
    }
}
