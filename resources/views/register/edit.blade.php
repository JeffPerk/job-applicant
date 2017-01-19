@extends('layouts/main')


@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <h3 class="panel-heading text-center">Welcome {{ $user->name }}!<br>Please select an opening your interested in!</h3>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="jobs" class="col-md-4 control-label">Openings:</label>

                              <div class="col-md-6">
                                <div data-toggle="buttons">
                                  @foreach ($jobs as $job)
                                    <label id="job-button" class="btn btn-primary">
                                      <input name="job[]" type="checkbox" autocomplete="off" checked> {{ $job->name }}
                                    </label>
                                  @endforeach
                                </div>
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
