<?php

include("class.php");

include("final.php");

include("inheritance/inheritance.php");

include_once("abstract/square.php");

/********** Class ***********/

$u1 = new User("Mlouk","1234");

echo $u1->__get("username");

echo "<br>";

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

/************ Inheritance **********/
/* 
echo "<br>";

// object instaniate Admin that Inheritance from Users
$admin1 = new Admin("super_admin", "123");

// Getter protected attribute 
echo $admin1->__get("username");

echo "<br>";

$admin1->delete();

echo "<br>";

// Overriding 
$admin1->hello();

echo "<br>";
 */
// final method 

/********* Abstract ********/
/* 
$square = new Square();

echo "<hr>";

$square->makeShape();

 */

 /********* Interface *************/


