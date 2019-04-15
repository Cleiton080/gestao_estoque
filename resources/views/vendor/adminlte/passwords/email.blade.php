@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
@stop

@section('body_class', 'bg-light')

@section('body')
    <div class="login-box">
        <div class="login-logo" style="margin-left: 50px;">
            <a class="text-primary" href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 20px; height: 270px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,.2); width: 400px;">
            <p style="font-size: 15pt;" class="text-center login-box-msg">{{ trans('adminlte::adminlte.password_reset_message') }}</p>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <br>
            <form action="{{ url(config('adminlte.password_email_url', 'password/email')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" style="height: 35px; font-size: 14pt; border-radius: 20px;" name="email" class="form-control" value="{{ isset($email) ? $email : old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div><br><br>
                <button type="submit" style="height: 35px; font-size: 12pt; border: 1px solid blue; border-radius: 10px; transition: 1s;"
                        class="btn btn-outline-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.send_password_reset_link') }}</button>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
