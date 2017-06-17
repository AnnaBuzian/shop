<?php
session_start();
header("HTTP/1.0 401 Unauthorized");
require_once "secure.inc.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = trim(strip_tags($_POST['user']));
    $pw = trim(strip_tags($_POST['pw']));
    $ref = trim(strip_tags($_POST['ref']));
    if(!$ref)
        $ref = '/shop/admin/';
    if($user and $pw){
        if($result = userExists($user)){
            list($login, $password, $salt, $iteration) = explode(':', $result);
            if(getHash($pw, $salt, $iteration) == $password){
                $_SESSION['admin'] = true;
                header("Location: $ref");
                exit;
            }else{
                $title = 'Неправильный пароль!';
            }
        }else{
            $title="Неправилное имя пользователя!";
        }
    }else{
        $title = "Заполните все поля формы!";
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Форма входа</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <h4>Заполните форму входа</h4>
        </div>
        <div class="row">
            <form action="" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <label for="exampleInputName">Логин: </label>
                    <input id="exampleInputName" class="form-control"  type="text" name="user" size="100">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Пароль: </label>
                    <input id="exampleInputPassword" class="form-control"  type="text" name="pw" size="50">
                </div>
                <div class="form-group">
                    <label for="exampleInputRef">Страница: </label>
                    <input id="exampleInputRef" class="form-control"  type="text" name="ref" size="50">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Вход</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>