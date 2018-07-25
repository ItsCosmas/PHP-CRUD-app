<?php
class Main{
//Check if admin user is logged in 
public function logged_in(){
    return (isset($_SESSION['loggedin'])) ? true : false;
}
}
?>