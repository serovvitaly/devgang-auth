@extends('form.wp_layout')

@section('title', 'Аутентификация')

@section('message', 'Вы вышли из системы.')

@php ($tabActive = 'auth')
@php ($windowHeight = 550)

@section('form')
    <form name="loginform" id="loginform" action="http://wp.zalipay.com/wp-login.php" method="post">
        <p>
            <label for="user_login">Имя пользователя или e-mail<br />
                <input type="text" name="log" id="user_login" aria-describedby="login_error" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Пароль<br />
                <input type="password" name="pwd" id="user_pass" aria-describedby="login_error" class="input" value="" size="20" /></label>
        </p>
        <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Запомнить меня</label></p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Войти" />
            <input type="hidden" name="redirect_to" value="http://wp.zalipay.com/wp-admin/" />
            <input type="hidden" name="testcookie" value="1" />
        </p>
    </form>
@endsection
