<?php
/**
 * Created by PhpStorm.
 * User: annabuzian
 * Date: 13.03.17
 * Time: 20:18
 */
class User{
 public $name;
 public $login;
 public $password;

 function showInfo(){
     echo "<hr><p>Name: " .$this->name;
     echo "<p>Login: " . $this->login;
     echo "<p>Password: " . $this->password;
 }
}

$user1 = new User();
$user1->name = "John Smith";
$user1->login = "JS";
$user1->password = "hgtyRTRF";
$user1->showInfo();

$user2 = new User();
$user2->name = "John Smith2";
$user2->login = "JS";
$user2->password = "hgtyRTRF";
$user2->showInfo();


$user3 = new User();
$user3->name = "John Smith3";
$user3->login = "JS";
$user3->password = "hgtyRTRF";
$user3->showInfo();