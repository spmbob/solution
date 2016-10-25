<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 16:07
 */

require_once 'AbstractClass.php';

class ConcreteClass1 extends AbstractClass
{
    protected $a;

    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }

    public function getSomethink() {
        return $this -> a = 3;
    }
};
?>