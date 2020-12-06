<?php 

// include("class.php");

class Admin extends User {
    

    public function create()
    {
        echo "New Record Created";
    }

    public function delete()
    {
        echo "Record has been Deleted ". $this->usernamed;
    }

    // Override 
    public function hello()
    {
        echo "Override";
    }
}