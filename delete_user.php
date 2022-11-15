<?php
require("opendatabase.php");


?>
<!DOCTYPE html>
<html>

<head>
    
    <title>users</title>
     <style>
            label{
            
        display: inline-block;
        width:80px;
        text-align: right;
      
            }
            .form-center{
                display:flex;
                justify-content: center;
            }
            .submit{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
       
         <br><a href="users.php">show users</a><br/>
    <a href="insert_user.php">insert user</a><br/>
        <a href="update_user.php">update user</a><br/>
        <div class="form-center">
    <form class="form" action="" method="post">
        <h1 style="color:red">DELETE USER:</h1>
        <br><label>ID:</label><input type="number" name="id" ><br>
        <br><div class="submit"><input type="submit" name="delete" value="delete" style="background:red"><br></div>
        <?php
        require("delete.php");
        ?>
        
        </form>
        </div>
    </body>
</html>
    
 