<?php
//class Pet{
//    public $name;
//    public $type = "unknown";
//
//    function say($word){
//        echo "Object said $word";
//    }
//}
//
//$cat = new Pet();
//$dog = new Pet();
//$cat->say("Myau");
//$dog->say("Gav");
//$cat->type = "cat";
class SuperClass{
    function functionName(){
        echo "<p>Вызвана функция " . __FUNCTION__;
    }

    function className(){
        echo "<p>Используем класс " . __CLASS__;
    }

    function methodName(){
        echo "<p>Вызван метод " . __METHOD__;
    }
}

$example = new SuperClass();
$example->functionName();
$example->className();
$example->methodName();

