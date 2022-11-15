<?php
 //query of sending data
    if(isset($_POST['insert'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $status=$_POST['status'];
        $role=$_POST['role'];
        $created=$_POST['created'];
     $query="insert into User (id,fullname,email,username,password,status,role,created) values(NULL,'".$fullname."','".$email."','".$username."','".$password."','".$status."','".$role."','".$created."')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of sending data");
    }
    }
?>