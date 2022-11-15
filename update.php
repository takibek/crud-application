 <?php
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $status=$_POST['status'];
        $role=$_POST['role'];
        $created=$_POST['created'];
     $query="update User set fullname='".$fullname."', email='".$email."',username='".$username."', password='".$password."',status='".$status."',role='".$role."',created='".$created."' where id=".$id."";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of updating data");
    }
    }
//and email='".$email"' and username='".$username"' and password='".$password"' and status='".$status"' and role='".$role"' and created='".$created"'
    ?>