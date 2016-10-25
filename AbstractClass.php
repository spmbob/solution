<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 25.10.2016
 * Time: 16:05
 */

abstract class AbstractClass {

    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract protected function getSomethink();

    public function printOut() {
        print $this->getValue() . "\n";
    }

    public function somethink() {
        print $this->getSomethink() * $this->getSomethink();
    }
};
?>