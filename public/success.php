<?php

/**
 * Возвращает значение поля из глобального массива $_POST,
 * если в массиве нет такого поля, или оно равно NULL,
 * то возвращает значение "по умолчанию" - $default
 * @param $fieldName
 * @param null $default
 * @return null|string
 */
function getPostField($fieldName, $default = null)
{
    if (!isset($_POST[$fieldName])) {
        return $default;
    }
    return trim($_POST[$fieldName]);
}

function jsonResponse(array $data)
{
    echo json_encode($data);
    exit;
}

$db = new PDO('pgsql:dbname=devgang_auth;host=127.0.0.1', 'postgres', '123');

$formToken = $_GET['token'];


switch (getPostField('method')) {
    case 'auth':
        $login = getPostField('login');
        $password = getPostField('password');
        $isSuccess = false;
        $data = false;
        if (!empty($login) && !empty($password)) {
            $isSuccess = true;
            $q = $db->prepare('select id from users where email = :email and password = :password limit 1');
            $q->execute([
                ':email' => $login,
                ':password' => md5($password),
            ]);
            $data = ['count' => $q->rowCount()];
        }
        jsonResponse([
            'success' => $isSuccess,
            'data' => $data,
        ]);
        break;
    case 'reg':
        $login = getPostField('login');
        $password = getPostField('password');
        $isSuccess = false;
        $data = false;
        if (!empty($login) && !empty($password)) {
            $isSuccess = true;
            $q = $db->prepare('insert into users set (email = :email and password = :password)');
            $q->execute([
                ':email' => $login,
                ':password' => md5($password),
            ]);
            $data = ['count' => $q->rowCount()];
        }
        jsonResponse([
            'success' => $isSuccess,
            'data' => $data,
        ]);
        break;
    case 'reset':
        //
        break;
    case 'success':
        //
        break;
    default:
        //
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .spinner {
            width: 40px;
            height: 40px;
            background-color: #5e8dff;

            margin: 100px auto;
            -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
            animation: sk-rotateplane 1.2s infinite ease-in-out;
        }

        @-webkit-keyframes sk-rotateplane {
            0% { -webkit-transform: perspective(120px) }
            50% { -webkit-transform: perspective(120px) rotateY(180deg) }
            100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
        }

        @keyframes sk-rotateplane {
            0% {
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
            } 50% {
                  transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                  -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
              } 100% {
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                }
        }
    </style>
</head>
<body>
<div>Авторизация</div>
<div class="spinner"></div>
<script>
    window.opener.parent.location = window.opener.parent.location;
    window.close();
</script>
</body>
</html>

