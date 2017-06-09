@extends('form.wp_layout')

@section('title', 'Восстановление пароля')

@section('message', 'Пожалуйста, введите ваше имя пользователя или e-mail. Вы получите письмо со ссылкой для создания нового пароля.')

@php ($tabActive = 'reset')
@php ($windowHeight = 520)

@section('form')
    <form name="lostpasswordform" id="lostpasswordform" action="http://wp.zalipay.com/wp-login.php?action=lostpassword" method="post">
        <p>
            <label for="user_login" >Имя пользователя или e-mail<br />
                <input type="text" name="user_login" id="user_login" class="input" value="" size="20" /></label>
        </p>
        <input type="hidden" name="redirect_to" value="" />
        <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Получить новый пароль" /></p>
    </form>
@endsection
