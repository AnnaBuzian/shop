<?php
header('Content-Type: text/html; charset=utf-8');
/* Параметры баз данных */
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "123123";
const DB_NAME = "eshop";
/* Соединение с базой */
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
/* Файл с данными пользователя */
const ORDERS_LOG = "orders.log";
/* Корзина пользователя */
$basket = array();
/* Кол-во товара в корзине пользователя */
$count = 0;
/* Создание или чтение корзины */
basketInit();