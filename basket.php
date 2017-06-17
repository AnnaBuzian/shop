<?php
// Подключение библиотек
//    require "secure/session.inc.php";
require "inc/lib.inc.php";
require "inc/db.inc.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Каталог товаров</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head><!--/head-->
<body>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +38 066 000 00 00</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> buzyan2008@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php">BOOKS SHOP</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="basket.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="#"><i class="fa fa-lock"></i> Вход</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php">Главная</a></li>
                            <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="catalog.php">Каталог товаров</a></li>
                                    <li><a href="basket.php">Корзина</a></li>
                                </ul>
                            </li>
                            <li><a href="#">О магазине</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="panel-title">Ваша корзина</h3>
            </div>
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissable fade in" style="display: none;" id="notRowsCatalog">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Ошибка!</strong>
                    <div id="errorMsg">Нет товаров в корзине</div>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>N п/п</th>
                        <th>Название</th>
                        <th>Автор</th>
                        <th>Год издания</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Удалить</th>
                    </tr>
                    <?php
                    $goods = myBasket();
                    if(!is_array($goods)){
                        echo "<script type='text/javascript'>$('#notRowsCatalog #errorMsg]').html('Не удалось получить список товаров'); $('#notRowsCatalog').show();</script>";
                    }
                    if(count($goods)==0){
                        echo "<script type='text/javascript'>$('#notRowsCatalog #errorMsg]').html('Товаров нет в корзине'); $('#notRowsCatalog').show();</script>";
                    }
                    $i = 1; $sum = 0;
                    foreach ($goods as $item){
                        ?>
                        <tr>
                            <td><?= $i?></td>
                            <td><?= $item['title'];?></td>
                            <td><?= $item['author'];?></td>
                            <td><?= $item['pubyear'];?></td>
                            <td><?= $item['price'];?></td>
                            <td><?= $item['quantity'];?></td>
                            <td><a href="delete_from_basket.php?id=<?= $item['id'];?>">Удалить</a></td>
                        </tr>
                        <?php
                        $i++;
                        $sum += $item['quantity'] * $item['price'];
                    }
                    ?>
                </table>
                <h4>Всего товаров на сумму: <?= $sum?> грн.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4"></div>
            <div class="col-xs-6 col-sm-4" align="center">
                <form action="orderform.php" method="post" role="form" class="form-horizontal">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Оформить заказ</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-4"></div>
        </div>
    </div>
</section>

<footer id="footer" class="navbar navbar-default navbar-fixed-bottom"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2017</p>
                <p class="pull-right">Курс PHP Уровень 3</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->
<body>