<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        html{
            /*background: -webkit-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -moz-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -ms-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: -o-linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);
            background: linear-gradient(90deg, #1d8daf 10%, #b1009b 90%);*/
        }
        body{
            background: none;
        }
        .advert-area.top{
            background-color: #daeaf6;
            height: 20px;
        }
        .advert-area.bottom{
            background-color: #daeaf6;
            height: 50px;
        }
    </style>
</head>
<body>
@include('ad.block1')
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation"@if($tabActive == 'auth') class="active"@endif><a href="/form/{{ $domainUid }}/auth">Авторизация</a></li>
                    <li role="presentation"@if($tabActive == 'reg') class="active"@endif><a href="/form/{{ $domainUid }}/reg">Регистрация</a></li>
                    <li role="presentation"@if($tabActive == 'reset') class="active"@endif><a href="/form/{{ $domainUid }}/reset">Восстановление</a></li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('ad.block2')
</body>
</html>
