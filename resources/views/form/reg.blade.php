<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Регистрация</title>

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
    </style>
</head>
<body>
<div id="app">
    <div style="height: 100px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation"><a href="/form/35345734/auth">Авторизация</a></li>
                    <li role="presentation" class="active"><a href="/form/35345734/reg">Регистрация</a></li>
                    <li role="presentation"><a href="/form/35345734/reset">Восстановление</a></li>
                </ul>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Форма регистрации</strong>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Имя</label>

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
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

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
                                <label for="password" class="col-md-4 control-label">Пароль</label>

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
                                <label for="password-confirm" class="col-md-4 control-label">Повторить пароль</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Зарегистрироваться
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
