<?php 

// include("class.php");

class Admin extends User {
    

    public function isWorking()
    {
        echo "Admin class Inheritance from User class ". $this->usernamed;
    }

    // Override 
    public function overRide()
    {
        echo "Override Method is a Method that inherit from parent class but in child class it's different";
    }
}