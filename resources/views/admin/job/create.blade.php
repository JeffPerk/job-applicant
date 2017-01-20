@extends('layouts.main')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-header">
            <h1 class="text-center">Create Job Form</h1>
          </div>
          <hr>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="{{ url('/new-job') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="job" class="col-md-4 control-label">Job Name</label>
                <div class="col-md-6">
                    <input id="job" type="text" class="form-control" name="job" value="{{ old('job') }}">
                    @if ($errors->has('job'))
                        <span class="help-block">
                            <strong>{{ $errors->first('job') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Add Job
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
