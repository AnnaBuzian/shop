<?php
require "secure/session.inc.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Форма добавления товара в каталог</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Добавление товара</h2>
                <form action="save2cat.php" method="post" role="form" class="form-horizontal">
                    <div class="form-group">
                        <label for="exampleInputName">Название: </label>
                        <input id="exampleInputName" class="form-control"  type="text" name="title" size="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAuthor">Автор: </label>
                        <input id="exampleInputAuthor" class="form-control"  type="text" name="author" size="50">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPubyear">Год издания: </label>
                        <input id="exampleInputPubyear" class="form-control"  type="text" name="pubyear" size="4">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Цена: </label>
                        <input for="exampleInputPrice" class="form-control"  type="text" name="price" size="6">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="panel-title"><a href="index.php">Вернуться назад</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>