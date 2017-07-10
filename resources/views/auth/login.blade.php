@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <form action="{{route('login')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <h1 class="title">Login</h1>
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="Email Here" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                            <label for="password {{$errors->has('password') ? 'is-danger' : ''}}" class="label">Password</label>
                            <p class="control">
                                <input class="input" type="password" name="password" id="password" placeholder="Email Here">
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Login</button>
                    </form>

                </div>{{--end of card content--}}
            </div>{{--end of card class--}}
            <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot Password</a></h5>
        </div>
    </div>
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
