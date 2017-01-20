@extends('layouts/main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-header text-center">
            <h1>Applicants</h1>
          </div>
          <hr>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Job</th>
                <th>Applicant Name</th>
                <th>Email Address</th>
                <th>Website</th>
                <th>Skills</th>
                <th>Cover Letter</th>
              </thead>
              <tbody>
                {{-- Web Developer --}}
                @foreach ($applicants as $applicant)
                  <tr>
                    <td>{{ $applicant->jobName }}</td>
                    <td>{{ $applicant->name }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td><a href="{{ $applicant->website }}">{{ $applicant->website }}</a></td>
                    <td>
                      <table class="table table-bordered">
                        @foreach ($applicant->skills as $skill)
                          <tr>
                            <td>{{ $skill->name }}</td>
                          </tr>
                        @endforeach
                      </table>
                    </td>
                    <td>{{ $applicant->cover_letter }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
