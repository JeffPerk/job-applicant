@extends('layouts/main')

@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-header">
          <h1 class="text-center">{{ $user->name }}</h1>
        </div>
        <hr>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <th>Job</th>
              <th>Name</th>
              <th>Email</th>
              <th>Personal Website</th>
              <th>Skills</th>
              <th>Cover Letter</th>
            </thead>
            <tbody>
              <td>{{ $user->applicant->job->name }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->applicant->website }}</td>
              <td>
                <table>
                  @foreach ($skills as $skill)
                    <tr>
                      <td>{{ $skill->name }}</td>
                    </tr>
                  @endforeach
                </table>
              </td>
              <td>{{ $user->applicant->cover_letter }}</td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
