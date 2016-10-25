<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 16:10
 */

require_once 'ConcreteClass1.php';

class ConcreteClass2 extends AbstractClass
{
    protected $a;

    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }

    public function getSomethink() {
        $this -> a = 2;
        return $this -> a;
    }
};
?>