<?php
$x = 10;
$isValid = new Validator($x);
if($isValid->isInt()->isNoEmpty()->exec()){ }
$x = '';
if($isValid->isString()->isNoEmpty()->exec()){}
class Validator{
    private $_val;
    private $_err = 0;

    function __construct($v)
    {
        $this->_val = $v;
    }
    function exec(){
        return !$this->_err;
    }
    function isInt(){
        if(!is_integer($this->_val))
            $this->_err++;
        return $this;
    }
    function isPos(){
        if(abs($this->_val) !== $this->_val)
            $this->_err++;
        return $this;
    }
    function isString(){
        if(!is_string($this->_val))
            $this->_err++;
        return $this;
    }
    function isNoEmpty(){
        if(empty($this->_val))
            $this->_err++;
        return $this;
    }
}
class A{ function foo(){echo __CLASS__;}}
class B{function foo(){echo __CLASS__;}}

function defer($name){
    switch ($name){
        case 'A': return new A; break;
        case 'B': return new B; break;
    }
}
defer('A')->foo();
//function foo(array $x){
//
//}
//foo(1);
//class User{
//    private $_name;
//    private $_age;
//
//    public $name{
//        function get(){return $this->name;}
//        function set($v){return $this->name = $v;}
//    }
//
//    public $age{
//        function get(){return $this->age;}
//        function set($v){return $this->age = $v;}
//    }
//}
//class Person{
//    private $data = array();
//    function __set($n, $v)
//    {
//        switch ($n){
//            case 'name': $this->name = $v; break;
//            case 'age': $this->age = $v; break;
//            default: throw new Exception('ERROR');
//        }
//    }
//    function __get($n)
//    {
//        switch ($n){
//            case 'name': return $this->name; break;
//            case 'age': return $this->age; break;
//            default: throw new Exception('ERROR');
//        }
//    }
//    function __call($n, $args){}
//    function __toString(){
//        return "Hello";
//    }
//    public function __invoke($var)
//    {
//        return $var * $var;
//    }
//}
//$x = new Person;
//$x->name = 'John';
//echo $x->name;
//echo $x;
//echo $x(10);
//function __autoload($name){
//    include $name. " class.php";
//}
//$x = new A;
//abstract class Db{
//    private $cnn;
//    function connect(){
//
//    }
//    abstract function open();
//    abstract function query();
//    abstract function close();
//    //abstract function foo();
//}
//class MyDb extends Db{
//    function open()
//    {
//        // TODO: Implement open() method.
//    }
//    function query()
//    {
//        // TODO: Implement query() method.
//    }
//    function close()
//    {
//        // TODO: Implement close() method.
//    }
//}
//$x = new MyDb;
//
//class Bar{
//    function __construct($obj)
//    {
//        $obj->open();
//        echo is_a($obj, 'MyDb');
//    }
//}
//
//$z = new Bar(new MyDb);

//class MyExceptionOne extends Exception{
//    function __construct($msg)
//    {
//        parent::__construct($msg);
//    }
//}
//class MyExceptionTwo extends Exception{
//    function __construct($msg)
//    {
//        parent::__construct($msg);
//    }
//}
//class Animal{
//    public $name;
//    public $age = 0;
//    function sayHello($word){
//        echo $this->name . ' сказал ' . $word;
//        $this->drawBr();
//    }
//    function drawBr(){
//        echo '<br>';
//    }
//    function __construct($x=0, $y)
//    {
//        try{
//            if(!$x)
//                throw new MyExceptionOne('Нет первого номера!');
//            if(!$y)
//                throw new MyExceptionTwo('Нет второго номера!');
//            if(!$z)
//                throw new Exception('Нет z номера!');
//            echo "Object #$x created<br>";
//        }catch (Exception $e){
//            echo $e->getMessage();
//        }catch (MyExceptionOne $e){
//            echo $e->getMessage();
//        }catch (MyExceptionTwo $e){
//            echo $e->getMessage();
//        }
//    }
//    function __destruct()
//    {
//        echo "Object deleted<br>";
//    }
//}
//$cat = new Animal(1);
//$dog = new Animal();
//$dog2 = new Animal(1, 3);
//$cat->name = 'Мурзик';
//$cat->age  = 2;
//$dog->name = 'Тузик';
//$dog->age  = 4;
//$bigCat = clone $cat;
//$cat->sayHello('Мяу');
//$dog->sayHello('Гав');
//$dog2->sayHello('Гав');
?>