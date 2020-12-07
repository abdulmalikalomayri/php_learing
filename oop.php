<?php

include("class.php");

include("inheritance.php");

include_once("abstract/square.php");

/********** Class ***********/
/* 
$u1 = new User("Mlouk","1234");

echo $u1->__get("username");

echo "<br>";

$u1->__set("username", "Abdulmalik");

echo $u1->__get("username");

echo "<br>";

$u1->welcome();
 */
/************ Inheritance **********/
/* 
echo "<br>";

$admin1 = new Admin("super_admin", "123");

echo $admin1->__get("username");

echo "<br>";

$admin1->delete();

echo "<br>";

$admin1->hello();

echo "<br>";

 */
/********* Abstract ********/

$square = new Square();

echo "<hr>";

$square->makeShape();