<?php

include("class.php");

include("final.php");

include("inheritance/inheritance.php");

include_once("abstract/square.php");

include_once("interface/interface.php");
include_once("interface/child.php");

/********** Class ***********/

$u1 = new User("Mlouk","1234");

// getter method 
echo $u1->__get("username");

echo "<br>";
// setter method
$u1->__set("username", "Abdulmalik");

echo $u1->__get("username");

echo "<br>";

// overriding
$u1->over();

echo "<br>";

// Static Attribute
User::$value = "Static Attribute";

// Static Method
User::state();


// OverLoading

/************ Inheritance **********/

/* echo "<br>";

// object instaniate Admin that Inheritance from Users
$admin1 = new Admin("super_admin", "123");

// Getter protected attribute 
echo $admin1->__get("username");

echo "<br>";

$admin1->isWorking();

echo "<br>";

// Overriding 
$admin1->overRide();

echo "<br>";
 */
// final method 

/********* Abstract ********/

// Error cannot declare an object with abstract class 
// $shaper = new Shape();
/* 
$square = new Square();

echo "<hr>";

$square->makeShape();


 */
 /********* Interface *************/

//  Error Interface cannot declare an object
// $inter = new InterfaceName();

$child = new Child();
