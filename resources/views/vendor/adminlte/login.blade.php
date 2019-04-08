@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
@stop

@section('body')
<div class="container">    
    <div class="row">
            <div class="form-group col-md-6 login-2">
                    <h1 class="display-4 text-center text-primary" style="margin-top: -55px;">Login</h1>
                <form>
                    <div class="form-group">
                        <button type="submit" style="margin-top: 15px; height: 50px; font-size: 18pt; border-radius: 20px; border: 1px solid blue; transition: 1s;"  class="btn btn-outline-primary btn-block ">Outlook</button>
                    </div><br>
                </form>
                <form>
                    <div class="form-group">
                        <button type="submit" style="margin-top: 20px; height: 50px; font-size: 18pt; border-radius: 20px; border: 1px solid red; transition: 1s;"  class="btn btn-outline-danger btn-block">Gmail</button>
                    </div>
                </form>
            </div>
        <div class="form-group col-md-6 login-1">
            <h1 class="display-4 text-center text-white" style="margin-top: -55px;">Entrar</h1>
            <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                    {!! csrf_field() !!}
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" style="height: 35px; font-size: 14pt; border-radius: 10px; transition: 1s;" class="form-control" value="{{ old('email') }}" placeholder="{{ trans('adminlte::adminlte.email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block" style="font-size: 12pt;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div><br>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" style="margin-top: 10px; height: 35px; font-size: 14pt; border-radius: 10px; transition: 1s;" name="Senha" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                   
                    @if ($errors->has('password'))
                        <span class="help-block" style="font-size: 12pt;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                    <div class="col-md-8">
                        <div class="checkbox icheck">
                            <label class="text-white" style="margin-top: 5px; font-size: 16pt;">
                                <input type="checkbox" name="remember"> {{ trans('adminlte::adminlte.remember_me') }}
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="color: white; height: 45px; font-size: 16pt; border: 1px solid lightgreen; border-radius: 10px; transition: 1s;" class="btn btn-outline-success btn-block btn-flat btn-lg">{{ trans('adminlte::adminlte.sign_in') }}</button>
                    </div>
                    
                <div class="auth-links">
                    <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                       class="text-center text-white" style="font-size: 12pt;">{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                    <br>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
