<?php
$name = isset($_GET['first_name']) ? trim( strip_tags($_GET['first_name'])) : 'Гость';
echo '<br>';
echo mktime(0, 0, 0, 2, 15, 1978), '<br>';
$stamp = mktime(0, 0, 0, 2, 15, 1978);
print_r(getdate($stamp));
echo '<br>';
echo strftime('%d - %Y', $stamp), '<br>';
echo date('d - m - Y H:i:s', $stamp), '<br>';
echo 'line: ', __LINE__, '<br>';
echo 'file: ', __FILE__, '<br>';
echo 'dir: ', __DIR__, '<br>';
print_r($GLOBALS);
echo '<br>';
echo 'Привет, ', $name, '!<br>';
echo 'Текущее время: ', $timestamp = date('H:i:s');
?>

    <form action="index.php">
        <p>Имя:<input name="first_name" type="text"></p>
        <p>Фамилия:<input name="last_name" type="text"></p>
        <p>Возвраст:<input name="age" type="number"></p>
        <p><input type="submit"></p>
    </form>
<?php
if (isset($_GET['first_name']) || isset($_GET['last_name'])|| isset($_GET['age'])) {
    echo 'мени: ', trim( strip_tags($_GET['first_name'])), '<br>';
    echo 'Длина фамилии: ', trim( strip_tags($_GET['last_name'])), '<br>';
    echo 'Ваш возвраст: ', (int)($_GET['age']), '<br>';
} else {
    echo 'Введите значения';
}
?>