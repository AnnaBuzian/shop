<?php
/**
 * Created by PhpStorm.
 * User: annabuzian
 * Date: 13.03.17
 * Time: 21:42
 */
try{
    x();
}catch (Exception $e){
 echo $e->getMessage();
}
function x(){
    y();
}
function y($p){
    z($p);
}
function z($p){
    if(!$p)
        throw new Exception('ERROR');
    return true;
}