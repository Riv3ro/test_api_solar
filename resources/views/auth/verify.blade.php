<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Верификация аккаунта</title>

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
              <form method="POST" action="{{ route('verification.resend') }}">
                    <h1>Активация</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                          @if (session('resent'))
                                <div class="alert alert-success">
                                  Письмо было отправлено повторно...
                                </div>
                            @endif
                            <p>Вам на почту была отправлена ссылка, для активации аккаунта</p>
                              @csrf
                          <button type="submit" class="btn btn-default submit">Отправить письмо повторно</button>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div>
                            <h1><i class="fa fa-code" ></i> {{ config('app.name') }}</h1>
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
