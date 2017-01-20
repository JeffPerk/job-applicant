<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function create() {
      $theme_data = [];
      $new_admin = "<li><a href='/new-admin'>New Admin</a></li>";
      $new_job = "<li><a href='/new-job'>Create Job</a></li>";
      $theme_data['new_admin'] = $new_admin;
      $theme_data['new_job'] = $new_job;
      return view('admin.job.create', $theme_data);
    }

    public function store(Request $request) {
     	 Job::create([
         'name' => $request->job
       ]);

       return redirect('/admin');
    }
}
