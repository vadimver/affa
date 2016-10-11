@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class ="col-sm-1 col-sm-offset-11 up-block">
        <form role="form" method="GET" action="{{ url('/login') }}">
          <button type="submit" class="btn login-button">
              Login
          </button>
        </form>
      </div>
        <div class = "col-sm-4 col-sm-offset-4 auth_block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input id="name" type="text" class="form-control auth_input" name="name" value="{{ old('name') }}" required autofocus placeholder = "Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control auth_input" name="email" value="{{ old('email') }}" required placeholder = "Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control auth_input" name="password" required placeholder = "Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input id="password-confirm" type="password" class="form-control auth_input" name="password_confirmation" required placeholder = "Confirm password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary reg-button">
                                    Started
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
