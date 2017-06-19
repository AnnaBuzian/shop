<?php
function __autoload($name){
    include "classes/$name.class.php";
}

$user1 = new User("John Smith", "JS", "hgtyRTRF");
$user1->showInfo();

$user2 = new User("John Smith2", "JS", "hgtyRTRF");
$user2->showInfo();

$user3 = new User("John Smith3", "JS", "hgtyRTRF");
$user3->showInfo();

$user4 = clone $user1;
$user4->showInfo();

$user = new SuperUser('Vasya Pupkin', 'vP', 'uhgrftTTT', 'admin');
$user->showInfo();
foreach ($user as $name => $value){
    echo '<p>' . $name . " : " .$value . "<br/>";
}
echo "<p>Количество рук " . User::HANDS;

echo "<p>Количество пользователей: " . User::$cntU;
echo "<p>Количество суперпользователей: " . SuperUser::$cntUs;
?>