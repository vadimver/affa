@extends('layouts.app')

@section('content')
<div class="container login">
  <div class = "row">
      <div class = "col-sm-4 welcome_block">
        <h1> AFFA </h1>
        <p class ="welcome">Quick notes for future affair</p>
      </div>
      <div class ="col-sm-1 col-sm-offset-7 up-block">
        <form role="form" method="GET" action="{{ url('/register') }}">
          <button type="submit" class="btn btn-success">
              Registration
          </button>
        </form>
      </div>
  </div>
    <div class="row">


        <div class = "col-sm-4 col-sm-offset-4 auth_block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control auth_input" name="email" value="{{ old('email') }}" required autofocus placeholder = "Email">

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

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary login-button">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
