<?php
class SuperUser extends User implements ISuperUser{
    public $role;
    public static $cntUs = 0;
    function __construct($n, $l, $p, $r)
    {
        parent::__construct($n, $l, $p);
        $this->role = $r;
        ++ self::$cntUs;
        -- parent::$cntU;
    }
    function showInfo(){
        parent::showInfo();
        echo '<p>Role: ' . $this->role;
    }
    function getInfo()
    {
        $arr = array();
        foreach ($this as $name => $value){
            $arr[$name] = $value;
        }
        return $arr;
    }
}