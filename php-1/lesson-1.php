<?php
// Установка локали и даты
setlocale(LC_ALL, "ru_RU");
$day = strftime('%d');
$mon = strftime('%b');
$year = strftime('%Y');

// переменные
$name  = 'Анна!';
echo "Привет, $name <br>";
var_dump($name);

//Преобразования кодировок
 echo iconv("windows-1251", "UTF-8", $name) . '<br>';

// Константы
define('NAME', 'ANNA!');
echo 'Вывод констанкты (define): ' . NAME, '<br>';
const SLEEP = 100;
echo 'Вывод констанкты (const): ' . SLEEP, '<br>';

// Heredoc
echo <<<TEXT
    Heredoc - вывод текста как в двойных кавычках
    <br>
TEXT;

// Howdoc
echo <<<'TEXT'
    Howdoc - вывод текста как в одинарных кавычках.\n
    <br>
TEXT;

//Строковые методы
echo 'Длинна строки: ', strlen($name), '<br>';
echo 'Длинна строки: ', mb_strlen($name), '<br>';

//Ссылки
$x = 10;
$y = &$x;
$y = 20;
echo $x . '<br>';
echo $y . '<br>';

//Переменные переменных
$x = 'name';
$$x = 'Alex';
$y = 20;
echo "Hello, " . $name . '<br>';

//Булев тип
$shop = true;
if($shop) {
    echo "Иду в магазин<br>";
    echo "Покупаю хлеб<br>";
} else {
    echo 'Иду домой', '<br>';
};

echo ($shop) ? "Иду в магазин<br> Покупаю хлеб<br>" : 'Иду домой <br>';

//Приветствие
$hour = (int)strftime('%H');
$welcome = '';
if ($hour > 0 and  $hour<6) {
    $welcome = "Доброй ночи";
} elseif ($hour >= 6 and $hour < 12){
    $welcome = "Доброе утро";
} elseif ($hour >= 12 and $hour < 18){
    $welcome = "Добрый день";
} elseif ($hour >= 18 and $hour < 23){
    $welcome = "Добрый вечер";
}

$size = ini_get('post_max_size');
$letter = $size[strlen($size) -1];
switch($letter) {
    case 'G': $size *= 1024;
    case 'M': $size *= 1024;
    case 'K': $size *= 1024;
}
echo 'Size: ' . $size, '<br>';

$awake = true;
$hungry = true;
echo ($awake && $hungry)? 'Eat! <br>' : 'Sleep! <br>';
?>
<!--вывод текущей даты-->
<h1><?=$welcome?>, Гость</h1>
<blockquote>
    <?php echo strftime('Сегодня %d-%m-%Y');?>
    <br>
    <?php echo "Сегодня $day число, $mon месяц, $year год";?>
</blockquote>
