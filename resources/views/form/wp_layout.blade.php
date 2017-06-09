<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="ru-RU">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-RU">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>@yield('title')</title>
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' href='http://wp.zalipay.com/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.8' type='text/css' media='all' />
    <meta name='robots' content='noindex,follow' />
    <meta name="viewport" content="width=device-width" />
    <script type="text/javascript">
        window.resizeTo(400, '{{ $windowHeight }}');
    </script>
</head>
<body class="login login-action-login wp-core-ui  locale-ru-ru">
<div id="login">
    <h1><a href="#" title="" tabindex="-1"></a></h1>
    <p class="message">@yield('message')<br />
    </p>

    @yield('form')

    <p id="nav">
        @if ($tabActive != 'auth')
            <a href="/form/widget/wp_auth">Войти</a> |
        @endif
        @if ($tabActive != 'reg')
            <a href="/form/widget/wp_reg">Регистрация</a> @if ($tabActive == 'auth') | @endif
        @endif
        @if ($tabActive != 'reset')
            <a href="/form/widget/wp_reset">Забыли пароль?</a>
        @endif
    </p>

</div>


<div class="clear"></div>
</body>
</html>
