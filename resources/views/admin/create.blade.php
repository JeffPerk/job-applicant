@extends('layouts.main')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-header">
            <h1 class="text-center">New Admin Form</h1>
          </div>
          <hr>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="{{ url('/new-admin') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Add Admin
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
