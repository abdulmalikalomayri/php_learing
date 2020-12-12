<?php

/**
 * Abstract class 
 * cannot be instantiate object 
 * can parent class 
 */
abstract class Shape {

    public $name;
    public $size;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function info()
    {
        echo "Shape: ". $this->name . "<br>Size: ". $this->size;
    }

    /**
     * Abstract Method can only defined but cannot write code in parent class 
     */
    abstract public function makeShape();
    

}