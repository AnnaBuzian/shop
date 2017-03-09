<?php
require "secure.inc.php";
$user = 'root';
$string = '123123';
$salt = '';
$iterationCount = 100;
$result = '';

if(!$salt)
    $salt = str_replace('=', '', base64_encode(md5(microtime() . '1FD37EAA5ED9425683326EA68DCD0E59')));

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['name'] ?: $user;
    if(!userExists($user)){
        $string = $_POST['password'] ?: $string;
        $salt = $_POST['salt'] ?: $salt;
        $iterationCount = (int)$_POST['iteration'] ?: $iterationCount;
        $result = getHash($string, $salt, $iterationCount);
        $result = 'Хеш '. $result . ' успешно добавлен в файл.';
        if(saveHash($user, $result, $salt, $iterationCount))
            $result = 'Хеш '. $result . ' успешно добавлен в файл.';
        else
            $result = 'При записи хеша ' . $result . 'произошла ошибка';
    }else{
        $result = "Пользователь $user уже существует. Выберите другое имя";
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Хеширование SHA-1</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <h4>Хеширование SHA-1</h4>
        </div>
        <div class="row">
            <form action="" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <label for="exampleInputName">Логин: </label>
                    <input id="exampleInputName" class="form-control"  type="text" name="name" size="100">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Пароль: </label>
                    <input id="exampleInputPassword" class="form-control"  type="text" name="password" size="50">
                </div>
                <div class="form-group">
                    <label for="exampleInputSalt">Соль: </label>
                    <input id="exampleInputSalt" class="form-control"  type="text" name="salt" size="150">
                </div>
                <div class="form-group">
                    <label for="exampleInputIteration">Число иттераций: </label>
                    <input for="exampleInputIteration" class="form-control"  type="text" name="iteration" size="6">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
