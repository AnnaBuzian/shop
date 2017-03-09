<?php
    // Подключение библиотек
    //    require "secure/session.inc.php";
    require "inc/lib.inc.php";
    require "inc/db.inc.php";
    $id = clearInt($_GET['id']);
    if($id){
        deleteItemFromBasket($id);
        header('Location: basket.php');
        exit;
    }
?>