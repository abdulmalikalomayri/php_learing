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
     * Overloading
     * OverRiding
     * getter & setter 
     * Static Attribute: Can called without creating an instance of a class
     * Static Method: Can called without createing an instance of a class
     * 
     */
    // Attribute type 
    protected $username;
    private $password;

    // Static Attribute can use without declare an object
    public static $staticAttribute = "Static Attribute ";

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
    public function overRide() 
    {
        echo "Hello there";
    }


    // final method 
    final public function finalMethod()
    {
        echo "final method: can't override";
    }

    // Static method can call without declaring an object
    public static function staticMethod()
    {
        /**
         * $this->value;
         * self::$value;
         */

        self::$staticAttribute = "Static Method";
        
        echo self::$staticAttribute;
    }

    public function test(){

        self::staticMethod();
    }

}