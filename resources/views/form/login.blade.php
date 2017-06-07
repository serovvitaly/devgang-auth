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
            padding: 10px;
            background: red;
        }
    </style>
</head>
<body>
<a class="button" href="#" onclick="return onAuth();">Авторизация</a>
<a class="button" href="#" onclick="return onReg();">Регистрация</a>
<script>
    function onAuth() {
        window.open('http://localhost:8010/form/widget/auth', 'authForm', 'width=400,height=600,resizable=no,left=1000,top=600,menubar=no,toolbar=no,status=no,fullscreen=no');
        return false;
    }
    function onReg() {
        window.open('http://localhost:8010/form/widget/reg', 'regForm', 'width=400,height=700,resizable=no,left=1000,top=600,menubar=no,toolbar=no,status=no,fullscreen=no');
        return false;
    }
</script>
</body>
</html>
