@extends('form.wp_layout')

@section('title', 'Регистрация')

@section('message', 'Зарегистрироваться на этом сайте.')

@php ($tabActive = 'reg')
@php ($windowHeight = 620)

@section('form')
    <form name="registerform" id="registerform" action="http://wp.zalipay.com/wp-login.php?action=register" method="post" novalidate="novalidate">
        <p>
            <label for="user_login">Имя пользователя<br />
                <input type="text" name="user_login" id="user_login" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_email">E-mail<br />
                <input type="email" name="user_email" id="user_email" class="input" value="" size="25" /></label>
        </p>
        <p id="reg_passmail">Подтверждение регистрации будет отправлено на ваш e-mail.</p>
        <br class="clear" />
        <input type="hidden" name="redirect_to" value="" />
        <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Регистрация" /></p>
    </form>
@endsection
