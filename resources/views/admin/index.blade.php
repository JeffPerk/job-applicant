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
                <th>Jobs</th>
                <th>Applicant Name</th>
                <th>Email Address</th>
                <th>Website</th>
                <th>Skills</th>
                <th>Cover Letter</th>
              </thead>
              <tbody>
                {{-- Web Developer --}}
                @foreach ($jobs as $job)
                  @foreach ($applicants as $applicant)
                    <tr>
                      <td>{{ $job->name }}</td>
                      @if ($applicant->jobName === $job->name)
                        <td>{{ $applicant->name }}</td>
                        <td>{{ $applicant->email }}</td>
                        <td>{{ $applicant->website }}</td>
                        @else
                          @php
                            break;
                          @endphp
                      @endif
                    </tr>
                  @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <button type="button"><a href="{{ url('/practice')}}">Press</a></button>
  </div>
@endsection
