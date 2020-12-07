<?php

/**
 * Abstract class 
 * cannot be instantiate object 
 * can parent class 
 */
abstract class Shape {


    public $num;
    
    public function __construct()
    {
        echo "Abstract Working";
    }

    /**
     * Abstract Method can only defined but cannot write code in parent class 
     */
    abstract public function makeShape();
    

}