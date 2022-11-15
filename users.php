<?php
require("opendatabase.php");
 $query="select * from User";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of retreiving data");
    }
require("show.php");
    mysqli_close($connection);

?>