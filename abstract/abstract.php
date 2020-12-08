<?php

/**
 * Abstract class 
 * cannot be instantiate object 
 * can parent class 
 */
abstract class Shape {

    public $num;

    /**
     * Abstract Method can only defined but cannot write code in parent class 
     */
    abstract public function makeShape();
    

}