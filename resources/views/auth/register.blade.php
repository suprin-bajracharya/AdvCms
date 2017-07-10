@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <h1 class="title">Register</h1>
                        <div class="field">
                            <label for="email" class="label">Name</label>
                            <p class="control">
                                <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" required name="name" id="name" placeholder="name Here" value="{{old('email')}}">
                            </p>
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" required name="email" id="email" placeholder="Email Here" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                            <label for="password {{$errors->has('password') ? 'is-danger' : ''}}" class="label">Password</label>
                            <p class="control">
                                <input class="input" type="password" name="password" required id="password" >
                            </p>
                            <label for="password {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" class="label">Password Confirmation</label>
                            <p class="control">
                                <input class="input" type="password" name="password_confirmation" required id="password_confirmation" >
                            </p>
                            @if($errors->has('password_confirmation'))
                                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">register</button>
                    </form>
                </div>{{--end of card content--}}
            </div>{{--end of card class--}}
            <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
        </div>
    </div>
{{--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
