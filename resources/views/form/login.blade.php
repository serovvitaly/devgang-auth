<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .button {
            padding: 8px 16px 7px;
            margin: 0;
            font-size: 12.5px;
            display: inline-block;
            zoom: 1;
            cursor: pointer;
            white-space: nowrap;
            outline: none;
            font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
            vertical-align: top;
            line-height: 15px;
            text-align: center;
            text-decoration: none;
            background: none;
            background-color: #d41b6f;
            color: #fff;
            border: 0;
            border-radius: 2px;
            box-sizing: border-box;
        }
        .button:hover{
            background-color: #f51c87;
            text-decoration: none;
        }
        .button-auth{
            background-color: #b6185d;
        }
        .button-auth:hover{
            background-color: #f51c87;
        }
        .button-reg{
            background-color: #249218;
        }
        .button-reg:hover{
            background-color: #2dbf20;
        }
    </style>
</head>
<body>
<a class="button button-auth" href="http://auth.devgang.ru/form/widget/auth" onclick="return onAuth();">Авторизация</a>
<a class="button button-reg" href="http://auth.devgang.ru/form/widget/reg" onclick="return onReg();">Регистрация</a>
<script>
    function resizeWin(wn) {
        wn.onload = function (e) {
            var body = wn.document.body,
                html = wn.document.documentElement;
            var height = Math.max( body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight );
            wn.resizeTo(400, height);
        };
    }
    function onAuth() {
        var wn = window.open('http://auth.devgang.ru/form/widget/auth', 'authForm', 'width=400,height=200,resizable=no,left=1000,top=600,menubar=no,toolbar=no,status=no,fullscreen=no');
        resizeWin(wn);
        return false;
    }
    function onReg() {
        var wn = window.open('http://auth.devgang.ru/form/widget/reg', 'regForm', 'width=400,height=200,resizable=no,left=1000,top=600,menubar=no,toolbar=no,status=no,fullscreen=no');
        resizeWin(wn);
        return false;
    }
</script>
</body>
</html>
