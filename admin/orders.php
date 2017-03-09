<?php
require "secure/session.inc.php";
require "../inc/lib.inc.php";
require "../inc/db.inc.php";
date_default_timezone_set('UTC');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Поступившие товары</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <h2>Поступившие заказы: </h2>
            <?php
                $orders = getOrders();
                foreach ($orders as $order) {
                    ?>

                    <hr>
                    <div class="col-sm-6">
                        <h4 class="panel-title">Заказ номер: <?=$order['orderid']?></h4>
                        <h3 class="panel-title">Заказчик: <?=$order['name']?></h3>
                        <h3 class="panel-title">Email: <?=$order['email']?></h3>
                        <h3 class="panel-title">Телефон: <?=$order['phone']?></h3>
                        <h3 class="panel-title">Адрес доставки: <?=$order['address']?></h3>
                        <h3 class="panel-title">Дата размещения заказа: <?=date('d-m-Y H:i:s', $order['dt'])?></h3>
                    </div>
                    <div class="col-sm-12">
                        <div class="alert alert-danger alert-dismissable fade in" style="display: none;"
                             id="notRowsCatalog">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Ошибка!</strong>
                            <div id="errorMsg">Нет заказа</div>
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
                            $goods = $order['goods'];
                            if (!is_array($goods)) {
                                echo "<script type='text/javascript'>$('#notRowsCatalog #errorMsg]').html('Не удалось получить список товаров'); $('#notRowsCatalog').show();</script>";
                            }
                            if (count($goods) == 0) {
                                echo "<script type='text/javascript'>$('#notRowsCatalog #errorMsg]').html('Товаров нет в корзине'); $('#notRowsCatalog').show();</script>";
                            }
                            $i = 1;
                            $sum = 0;
                            foreach ($goods as $item) {
                                ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $item['title']; ?></td>
                                    <td><?= $item['author']; ?></td>
                                    <td><?= $item['pubyear']; ?></td>
                                    <td><?= $item['price']; ?></td>
                                    <td><?= $item['quantity']; ?></td>
                                    <td><a href="delete_from_basket.php?id=<?= $item['id']; ?>">Удалить</a></td>
                                </tr>
                                <?php
                                $i++;
                                $sum += $item['quantity'] * $item['price'];
                            }
                            ?>
                        </table>
                        <h4>Всего товаров на сумму: <?= $sum ?> грн.</h4>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>
</body>
</html>