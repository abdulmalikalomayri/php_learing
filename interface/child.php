<?php

/**
 * Child Interface 
 * inherit from interface using (implements) 
 * the class implement from interface must 
 * define all the methods that they inherit from 
 * implements can inherit more than one Interface
 */

class Child implements InterfaceName {

    public $name;
    public $attack;
    public $health;

    public function attack($user)
    {
        return $this->attack - $user;
    }
    
    public function hurt() 
    {

    }

    public function jump()
    {

    }

    public function heal()
    {

    }

}