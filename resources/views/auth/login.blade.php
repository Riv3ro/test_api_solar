<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Авторизация </title>

    <!-- Bootstrap -->
    <link href="{{asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('template/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('template/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('template/admin/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div id="register">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <h1>Авторизация</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" class="form-control required" name="email" value="{{ old('email') }}" placeholder="Email" />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Войти</button>
                        <a class="reset_pass" href="{{ route('password.request') }}">Забыли пароль?</a>
                    </div>
                    <div class="clearfix"></div>

                    <div class="separator">
                        @if(Route::has('register'))
                        <p class="change_link">Еще нет аккаунта?
                            <a href="{{ route('register') }}" class="to_register">Регистрация</a>
                        </p>
                        @endif

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-code"></i> {{ config('app.name') }}</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('template/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('template/vendors/nprogress/nprogress.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('template/admin/js/custom.min.js')}}"></script>
</body>
</html>
