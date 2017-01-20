@extends('layouts/main')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <h3 class="panel-heading text-center">Welcome {{ $user->name }}!<br>Please select an opening your interested in!</h3>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/new-applicant/'.$user->id)}}">
                          {{ method_field('PATCH') }}  {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="jobs" class="col-md-4 control-label">Openings:</label>

                              <div class="col-md-6">
                                <div data-toggle="buttons">
                                  @foreach ($jobs as $job)
                                    <label id="job-button" class="btn btn-primary">
                                      <input name="job_id" type="checkbox" autocomplete="off" value="{{ $job->id }}"> {{ $job->name }}
                                    </label>
                                  @endforeach
                                </div>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">Personal Website</label>

                              <div class="col-md-6">
                                  <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}">

                                  @if ($errors->has('website'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('website') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('cover_letter') ? ' has-error' : '' }}">
                              <label for="cover_letter" class="col-md-4 control-label">Cover Letter</label>

                              <div class="col-md-6">
                                  <textarea id="cover_letter" type="cover_letter" class="form-control" name="cover_letter" value="{{ old('cover_letter') }}"></textarea>

                                  @if ($errors->has('cover_letter'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('cover_letter') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('skills') ? ' has-error' : '' }}">
                              <label id="skills-label" for="skills" class="col-md-4 control-label">Skills</label>
                              <small id="skills-label-message"><i>Please separate each skill with a comma!</i></small>

                              <div class="col-md-6">
                                  <textarea id="skills" type="skills" class="form-control" name="skills" value="{{ old('skills') }}"></textarea>

                                  @if ($errors->has('skills'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('skills') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Apply
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection
