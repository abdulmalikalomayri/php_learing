<?php

// User
class User {

    /**
     * Public = access from everywhere, Default 
     * protected = access from class or inheritaned class 
     * private = access from only parent class 
     */
    // Attribute type 
    protected $username;
    private $password;

    public $level;

    // Constructor
    function __construct($username, $password) {

        $this->username = $username;
        $this->password = $password;
    }

    // Magic Method SET
    public function __set($name, $value)
    {
        $this->$name = $value;
        
    }
    // Magic Method GET
    public function __get($name)
    {
        if(isset($this->$name)) {
            return $this->$name;
        }
    }

    // Method Override
    public function hello() 
    {
        echo "Hello there";
    }

    final public function welcome()
    {
        echo "final method: can't override";
    }

}