<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Форма оформление заказа</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Оформление заказа</h2>
                <form action="saveorder.php" method="post" role="form" class="form-horizontal">
                    <div class="form-group">
                        <label for="exampleInputName">Заказчик: </label>
                        <input id="exampleInputName" class="form-control"  type="text" name="name" size="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email заказчика: </label>
                        <input id="exampleInputEmail" class="form-control"  type="email" name="email" size="50">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Телефон для связи: </label>
                        <input id="exampleInputPhone" class="form-control"  type="tel" name="phone" size="20">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress">Адрес доставки: </label>
                        <input for="exampleInputAddress" class="form-control"  type="text" name="address" size="150">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Заказать</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="panel-title"><a href="index.php">Вернуться в каталог товаров</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>