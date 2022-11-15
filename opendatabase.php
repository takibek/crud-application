<?php
$location="localhost";
$username="id19859595_admin";
$password="test@TEST123";
$database_name="id19859595_crud";
    $connection=mysqli_connect($location,$username,$password,$database_name);
    if(mysqli_connect_errno()){
        die("there is a connection problem".mysqli_connect_error());
    }else{
        echo"connection good";
    }
    ?>