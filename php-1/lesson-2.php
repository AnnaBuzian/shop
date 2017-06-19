<?php
    //$arr = []; //$arr1 = array();
    $arr = ["John", "root", "1234"];
    $arr[] = 25;
    var_dump($arr);
    print_r($arr);

    $arr2 = [
        'login' => 'root',
        'password' => '12344'
    ];
    var_dump($arr2);
    print_r($arr2);

    //Navigation task
    $menu = [
        ['link' => 'Главная', 'href' => 'https://google.com'],
        ['link' => 'Контакты', 'href' => 'https://google.com']
    ];
?>
    <ul>
        <li><a href="<?= $menu[0]['href']?>"><?= $menu[0]['link']?></a></li>
        <li><a href="<?= $menu[1]['href']?>"><?= $menu[1]['link']?></a></li>
    </ul>

    <ul>
        <?php
            for ($i = 0; $i < count($menu); $i++){
                echo '<li><a href="' . $menu[$i]['href'] . '">' . $menu[$i]['link'] . '</a></li>';
            }
        ?>

    </ul>


<?php
    //Циклы
    for($i = 1; $i<=10; $i++) {
        echo ($i%2 == 0) ? $i . ': четное<br>' : $i . ': нечетное<br>';
    }

    $str = 'Hello';
    $i = 0;
    while ($i < strlen($str)) {
        echo $str{$i} . '<br>';
        $i++;
    }

    $i = 100;

    do {
        echo $i++;
    } while ($i <= 10);
     echo '<br>';

    $rows = 10;
    $cols = 10;
    echo '<table>';
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            echo '<td>' . $td * $tr . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    $nums = [1, 2, 3, 4, 5];
    foreach ($nums as $v) {
        $v *= 10;
    }
    var_dump($nums);

    function drawTable ($rows = 10, $cols = 10) {
        echo '<table>';
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo '<tr>';
            for ($td = 1; $td <= $cols; $td++) {
                echo '<td>' . $td * $tr . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    drawTable();
?>