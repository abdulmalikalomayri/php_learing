<?php

// Imports 
include("abstract.php");

class square extends Shape {
    

    public function makeShape()
    {
        
        for($i=0; $i<5; $i++)
        {
            for($j=0; $j<5; $j++)
            {
                echo " *";
            }
            echo "<br>";
        }
    }
}