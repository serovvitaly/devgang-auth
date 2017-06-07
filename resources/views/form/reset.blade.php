<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Восстановление пароля</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        html{
            background: -webkit-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -moz-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -ms-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -o-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
        }
        body{
            background: none;
        }
        .nav-tabs>li>a{
            color: white;
            font-weight: bold;
        }
        .nav-tabs li.active>a{
            color: #004c77;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('ad.block1')
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation"><a href="/form/{{ $domainUid }}/auth">Авторизация</a></li>
                    <li role="presentation"><a href="/form/{{ $domainUid }}/reg">Регистрация</a></li>
                    <li role="presentation" class="active"><a href="/form/{{ $domainUid }}/reset">Восстановление</a></li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Обновить пароль
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @include('ad.block2')
            </div>
        </div>
    </div>
</div>

</body>
</html>
