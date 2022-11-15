 <?php

echo "
    <br><a href='insert_user.php' style='color:green'>insert new user</a><br/>
    <br><a href='update_user.php' style='color:orange'>update user</a><br/>
    <br><a href='delete_user.php' style='color:red''>delete user</a><br/><br>";
        echo "".strtoupper("users")."<br>";
//show data 
require 'showdatausers.inc';
        $count=0;
        echo "<table><tr><th>USER NUMBER </th><th>ID</th><th>FULLNAME</th><th>EMAIL</th><th>USRNAME</th><th>PASSWORD</th><th>STATUS</th><th>ROLE</th><th>CREATED</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
     $count++;   
        
        /// function for creating random color

        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        $show=new SHOW();
        echo "<tr style='color:".$color."'> ".$show->datashow($row, $count)."</tr>";
        
        //echo "<li>id:".$row['id']." fullname: ".$row['fullname']." email:".$row['email']." username:".$row['username']." password:".$row['password']." status: ".$row['status']." role: ".$row['role']." created".$row['created']."</li>";
    }
    echo"</table>";
        
        //free memory
        mysqli_free_result($result);
    ?>
<!DOCTYPE html>
<html>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</html>