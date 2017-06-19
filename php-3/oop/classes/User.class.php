<?php
class User extends AUser{
    public $name;
    public $login;
    public $password;
    public static $cntU = 0;

    const HANDS = 2;
    public function __sleep()
    {
        return array('login', 'password');
    }
    public function __wakeup()
    {
        $this->getUser();
    }
    function getUser(){}
    function __construct($n, $l, $p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
        $this->getUser();
        ++ self::$cntU;
    }
    function __destruct()
    {
        echo "<p>Пользователь " . $this->name . " удален";
    }
    function showInfo(){
        echo "<hr><p>Name: " .$this->name;
        echo "<p>Login: " . $this->login;
        echo "<p>Password: " . $this->password;
    }
    function __clone()
    {
        $this->name = 'Guest';
        $this->login = 'guest';
        $this->password = '0000';
        ++ self::$cntU;
    }
    function printHands(){
        echo self::HANDS;
    }
}