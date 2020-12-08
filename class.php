<?php

// include_once("final.php");
// User
class User {

    /**
     * Access Modifiers
     * Public = access from everywhere, Default 
     * protected = access from class or inheritaned class 
     * private = access from only parent class 
     * ***************************************
     * 
     * 
     */
    // Attribute type 
    protected $username;
    private $password;

    public $level;

    // Static Attribute can use without declare an object
    public static $value = "static";

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

    // Method Override same func name different action 
    public function hello() 
    {
        echo "Hello there";
    }

    // final method 
    final public function over()
    {
        echo "final method: can't override";
    }

    // Static method can call without declaring an object
    public static function state()
    {

        echo self::$value;
    }

}