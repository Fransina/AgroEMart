<?php
$host = 'localhost';  
$db_name = 'testing'; ;
$user_name = 'root';
$user_password = '';

 $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error()); 
    }

?>